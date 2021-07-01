<?php


namespace App\Actions;


use Symfony\Component\HttpClient\HttpClient;

class GetEvents
{

    /**
     * fetch a list of events in London.
     *
     * @return false|\Illuminate\Support\Collection
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public static function execute()
    {
        $client = HttpClient::create();
        $request = $client->request('GET',
            'https://api.ticketswitch.com/f13/events.v1?city_code=london-uk&req_extra_info=1', [
                'auth_basic' => [config('app.api_username'), config('app.api_password')]
            ]);

        if ($request->getStatusCode() !== 200) {
            return false;
        }

        $event_objects = json_decode($request->getContent());

        if (!isset($event_objects->results)) {
            return false;
        }

        if (!isset($event_objects->results->event)) {
            return false;
        }

        $collection = [];
        foreach ($event_objects->results->event as $event) {
            $collection[] = collect($event);
        }


        return collect($collection);
    }
}
