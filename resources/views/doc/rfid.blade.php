@extends('layouts.doc')
@section('container')
    <div class="container">
        <h4 class="text-center">RFID</h4>

        {{-- HTTP REQUEST - GET --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - GET [Read]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/rfid</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "list data rfid",
    "data": [
        {
            "id": 3,
            "id_rfid": "004",
            "name": "P004",
            "created_at": "2021-08-02T05:54:37.000000Z",
            "updated_at": "2021-08-02T05:54:37.000000Z"
        }
    ]
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - GET --}}

        {{-- HTTP REQUEST - GET with id --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - GET with id `Primary Key` [Read]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/rfid/{id}</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "data rfid by id",
    "data": {
        "id": 3,
        "id_rfid": "004",
        "name": "P004",
        "created_at": "2021-08-02T05:54:37.000000Z",
        "updated_at": "2021-08-02T05:54:37.000000Z"
    }
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - GET with id --}}

        {{-- HTTP REQUEST - GET with id_rfid --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - GET with id_rfid [Read]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/rfid/id_rfid/{id_rfid}</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "data rfid by id_rfid",
    "data": {
        "id": 3,
        "id_rfid": "004",
        "name": "P004",
        "created_at": "2021-08-02T05:54:37.000000Z",
        "updated_at": "2021-08-02T05:54:37.000000Z"
    }
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - GET with id --}}

        {{-- HTTP REQUEST - POST --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - POST [Create]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/rfid</h6>
                <h6 class="card-title">Request Header</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <td>Key</td>
                                <td>Value</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-danger">
                                <td>Content-Type</td>
                                <td>application/x-www-form-urlencoded</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-title">Request Body</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <td>Field</td>
                                <td>Data Type</td>
                                <td>Description</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-danger">
                                <td>id_rfid</td>
                                <td>String</td>
                                <td>Unique Identifier RFID</td>
                            </tr>
                            <tr class="text-danger">
                                <td>name</td>
                                <td>String</td>
                                <td>Name for Unique Identifier RFID</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "rfid created",
    "data": {
        "id_rfid": "005",
        "name": "P005",
        "updated_at": "2021-08-03T03:21:00.000000Z",
        "created_at": "2021-08-03T03:21:00.000000Z",
        "id": 6
    }
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - POST --}}

        {{-- HTTP REQUEST - PUT --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - PUT [Update]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/rfid/{id}</h6>
                <h6 class="card-title">Request Header</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <td>Key</td>
                                <td>Value</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-danger">
                                <td>Content-Type</td>
                                <td>application/x-www-form-urlencoded</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-title">Request Body</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <td>Field</td>
                                <td>Data Type</td>
                                <td>Description</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-danger">
                                <td>id_rfid</td>
                                <td>String</td>
                                <td>Unique Identifier RFID</td>
                            </tr>
                            <tr class="text-danger">
                                <td>name</td>
                                <td>String</td>
                                <td>Name for Unique Identifier RFID</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "rfid updated",
    "data": {
        "id": 6,
        "id_rfid": "001",
        "name": "N001",
        "created_at": "2021-08-03T03:21:00.000000Z",
        "updated_at": "2021-08-03T03:22:11.000000Z"
    }
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - PUT --}}

        {{-- HTTP REQUEST - DELETE --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - DELETE [Delete]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/rfid/{id}</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "rfid deleted"
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - DELETE --}}
    </div>
@endsection
