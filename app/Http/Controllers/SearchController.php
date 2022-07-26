<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ServiceOrder;
use App\Models\Provider;
use App\Http\Classes\Search;
use App\Http\Requests\SearchRequest;
use App\Http\Classes\Sanitize;

class SearchController extends Controller
{
    public function __construct(Client $client, ServiceOrder $order, Provider $provider)
    {
        $this->client = $client;
        $this->order = $order;
        $this->provider = $provider;
    }

    /**
     * Method to search registers on clients model using the 
     * search fields on "Clientes" page
     */
    public function searchClients(SearchRequest $request)
    {
        // Sanitize request
        $sanitized = new Sanitize();
        $dataForm = $sanitized->searchSanitize($request);
        
        // // using search class to find registers on models
        $searchClients = new Search($this->client);
        $searchOrders = new Search($this->order);

        // // $clientStatus_id used in switch and to filter with page will be loaded
        // $clientStatus_id = $request->client_status_id;

        // // Switch to define page title
        // switch ($clientStatus_id) {
        //     case "1,2,3,4":
        //         $title = 'Todos os clientes';
        //         break;
        //     case "2":
        //         $title = 'Clientes inativos';
        //         break;
        //     case "3":
        //         $title = 'Clientes com ordens';
        //         break;
        //     case "4":
        //         $title = 'Clientes com ordens encerradas';
        //         break;
        //     default:
        //         $title = 'Clientes potenciais';
        //         break;
        // }

        //  // Structure to filter customers (does not include demand)
        foreach ($dataForm as $key => $value) {
            if ($key !== 'service_type_id') {
                $dataClient[$key] = $value;
            }
        }
        $clients = $searchClients->searchOnModels($dataClient)['numberRegisters']
            ->orderBy('name');

        // // find orders with specific demand requested
        // $clientDemand = $request->service_type_id; // use to keep filters after page is reloaded

        // // request used in foreach
        $dataOrder = request(['service_type_id']);

        // // find number of orders with specific demand
        $orders = $searchOrders->searchOnModels($dataOrder)['numberRegisters'];
        
        // foreach ($orders as $key => $value) {
        //     dd($value);
        // }
        $amountOrdersKeys = $searchOrders->searchOnModels($dataOrder)['numberKeys'];
        
        // // find unique clients ids with specific demand
        $clientsWithOrders = null;
        if ($amountOrdersKeys > 0) {
            $clientsWithOrders = $orders->get()->map(function($serviceOrder) {
                    return $serviceOrder->client_id;
                })->unique();
        }

        // // Joining structures with and without demand
        if ($clientsWithOrders !== null) {
            $clients = $clients->with(['serviceOrders'])->whereIn('id', $clientsWithOrders)->get();
        } else {
            $clients = $clients->get();
        }

        // // Variables to retrieve selected fields in previous filtering
        // $clientName = $request->name;
        // $clientTel = $request->tel;
        // $clientBrazilStateId = $request->brazil_state_id;
        // $clientBrazilCityId = $request->brazil_city_id;
        // $clientCountry = $request->country_id;
        // $clientCity = $request->city_id;
        // $request->boolean('firma_aberta') === true ? $clientFirma = 1 : $clientFirma = 0;
        // $request->boolean('cnh') === true ? $clientCnh = 1 : $clientCnh = 0;
        // $request->boolean('cpf') === true ? $clientCpf = 1 : $clientCpf = 0;
        // $request->boolean('digital_certification') === true ? $clientDigitalCertification = 1 : $clientDigitalCertification = 0;
        // $request->boolean('passport') === true ? $clientPassport = 1 : $clientPassport = 0;

        // return view(
        //     'client.listClients',
        //     compact(
        //         'clients', 'title', 'clientStatus_id', 'dataForm',
        //         'clientName', 'clientDemand', 'clientTel',
        //         'clientBrazilStateId', 'clientFirma', 'clientCnh',
        //         'clientCpf', 'clientDigitalCertification',
        //         'clientPassport', 'clientCountry', 'clientCity'
        // ));

        return response()->json($clients, 200);
    }

    /**
     * Method to search registers on orders model using the 
     * search fields on "Ordens de serviço" page
     */
    public function searchOrders(SearchRequest $request)
    {
        $sanitized = new Sanitize();

        // sanitize request
        $dataForm = $sanitized->searchSanitize($request);

        // using search class to find registers on models
        $searchClients = new Search($this->client);
        $searchProviders = new Search($this->provider);
        $searchOrders = new Search($this->order);

        $orderStatus_id = $request->order_status;
        
        // Define list title on page
        // switch ($orderStatus_id) {
        //     case "1,2,3,4,5,6":
        //         $title = 'Ordens em andamento';
        //         break;
        //         default:
        //         $title = 'Ordens encerradas';
        //         break;
        // }

        // variable to be used when filling the order status field
        // $status = null;

        // REQUESTS BY MODEL
        // Order
        if ($dataForm['order_status_id'] === null) {
            $dataOrder = [
                'service_type_id' => $dataForm['service_type_id'],
                'order_status_id' => $dataForm['order_status']
            ];
        } else {
            $dataOrder = [
                'service_type_id' => $dataForm['service_type_id'],
                'order_status_id' => $dataForm['order_status_id']
            ];
        }

        // client
        $dataClient = [
            'name' => $dataForm['name'],
            'tel' => $dataForm['tel'],
            'brazil_state_id' => $dataForm['brazil_state_id'],
            'brazil_city_id' => $dataForm['brazil_city_id']
        ];

        // provider
        $dataProvider = [
            'providerName' => $dataForm['providerName'],
            'contact' => $dataForm['contact']
        ];

        // Swap key name for provider request to match with column name in table
        $dataProvider['name'] = $dataProvider['providerName'];
        unset($dataProvider['providerName']);

        // Find all clients that match with dataClient request
        $clients = $searchClients->searchOnModels($dataClient)['numberRegisters'];
        $amountClientsKeys = $searchClients->searchOnModels($dataClient)['numberKeys'];

        // Find all providers that match with dataProvider request
        $providers = $searchProviders->searchOnModels($dataProvider)['numberRegisters'];
        $amountProvidersKeys = $searchProviders->searchOnModels($dataProvider)['numberKeys'];

        // Find all orders that match with dataOrder request
        $orders = $searchOrders->searchOnModels($dataOrder)['numberRegisters'];

        // Define status value to keep select field filled
        // $dataForm['order_status_id'] !== null 
        // ? $status = $dataOrder['order_status_id'] 
        // : $status = null;

        // get unique clients ids if there is a request for clients
        if ($amountClientsKeys > 0) {
            $clients = $clients->get()->map(function($client){
                return $client->id;
            })->unique();
        } else {
            $clients = null;
        }

        // get unique providers ids if there is a request for providers
        if ($amountProvidersKeys > 0) {
            $providers = $providers->get()->map(function($provider){
                return $provider->id;
            })->unique();
        } else {
            $providers = null;
        }

        // Match orders with clients ids
        !is_null($clients) 
        ? $orders = $orders->whereIn('client_id', $clients) 
        : $clients == null;
        
        // Match orders with providers ids
        !is_null($providers)
        ?  $orders = $orders->whereIn('provider_id', $providers)
        : $providers == null;
        
        // Final orders to load
        $orders = $orders->with(
            [
                'client', 'orderStatus', 
                'provider', 'serviceType'
            ]
        )->latest('updated_at')
        ->paginate(15);

        // Variables to retrieve selected fields in previous filtering
        // $clientName = $request->name;
        // $clientTel = $request->tel;
        // $clientBrazilStateId = $request->brazil_state_id;
        // $clientDemand = $request->service_type_id;
        // $providerName = $dataProvider['name'];
        // $contact = $request->contact;

        // return view(
        //     'order.listOrders', 
        //     compact(
        //         'orders', 'title', 'orderStatus_id', 'contact',
        //         'clientName', 'clientTel', 'clientBrazilStateId',
        //         'clientDemand', 'status', 'providerName'
        // ));

        return response()->json($orders, 200);
    }
}
