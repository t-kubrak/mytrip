@extends('layouts.app')

@section('content')

<h1>API Using</h1>

<table class="table">
    <thead>
        <th>HTTP Method</th>
        <th>Endpoint</th>
        <th>Parameters</th>
        <th>Response</th>
    </thead>
    <tbody>
    <tr>
        <td>GET</td>
        <td>http://tkwebdev.xyz/api/airports</td>
        <td>None</td>
        <td>Array of airports objects</td>
    </tr>
    <tr>
        <td>GET</td>
        <td>http://tkwebdev.xyz/api/flights?trip=<b>id</b></td>
        <td>id - id of the trip</td>
        <td>Array of flights objects</td>
    </tr>
    <tr>
        <td>POST</td>
        <td>http://tkwebdev.xyz/api/flights?trip=<b>id</b>&departure=<b>code</b>&arrival=<b>code</b></td>
        <td>id - id of the trip, code - airport code</td>
        <td>Created flight object</td>
    </tr>
    <tr>
        <td>DELETE</td>
        <td>http://tkwebdev.xyz/api/flights/<i><b>flightId</b></i>?trip=<b>tripId</b></td>
        <td>flightId - id of the flight, tripId - id of the trip</td>
        <td>Deleted flight object</td>
    </tr>
    <tr>
        <td>PUT</td>
        <td>http://tkwebdev.xyz/api/trips/<i><b>id</b></i>?name=<b>Name</b></td>
        <td>id - id of the trip, Name - name of the trip</td>
        <td>Updated trip object</td>
    </tr>
    </tbody>
</table>

    <h2>Examples</h2>

    <p><code>curl http://tkwebdev.xyz/api/airports</code>
    <p><code>curl http://tkwebdev.xyz/api/flights?trip=1</code></p>
    <p><code>curl -X POST http://tkwebdev.xyz/api/flights -d "trip=1&departure=JFK&arrival=YYZ"</code></p>
    <p><code>curl -X DELETE http://tkwebdev.xyz/api/flights/33?trip=1</code></p>
    <p><code>curl -X PUT http://tkwebdev.xyz/api/trips/1?name=Best%20Trip</code></p>

@endsection