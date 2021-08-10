@extends('layouts.doc')
@section('container')
    <div class="container">
        <h4 class="text-center">Item</h4>

        {{-- HTTP REQUEST - GET --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - GET [Read]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/item</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "list data item",
    "data": [
        {
            "id": 3,
            "name": "item 2",
            "image": "image.png",
            "created_at": "2021-08-05T04:55:38.000000Z",
            "updated_at": "2021-08-05T04:55:38.000000Z"
        },
        {
            "id": 1,
            "name": "name 1",
            "image": "image.png",
            "created_at": "2021-08-05T04:36:50.000000Z",
            "updated_at": "2021-08-05T04:55:15.000000Z"
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
                <h5 class="card-title">HTTP REQUEST - GET with `Primary Key` [Read]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/item/{id}</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "data item by id",
    "data": {
        "id": 3,
        "name": "item 2",
        "image": "image.png",
        "created_at": "2021-08-05T04:55:38.000000Z",
        "updated_at": "2021-08-05T04:55:38.000000Z"
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
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/item</h6>
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
                                <td>name</td>
                                <td>String</td>
                                <td>Name for Item</td>
                            </tr>
                            <tr class="text-danger">
                                <td>image</td>
                                <td>String</td>
                                <td>Image for Item</td>
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
    "message": "item created",
    "data": {
        "name": "item 3",
        "image": "image.png",
        "updated_at": "2021-08-05T04:57:46.000000Z",
        "created_at": "2021-08-05T04:57:46.000000Z",
        "id": 4
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
                <h5 class="card-title">HTTP REQUEST - PUT [Edit]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/Item/{id}</h6>
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
                                <td>name</td>
                                <td>String</td>
                                <td>Name for Item</td>
                            </tr>
                            <tr class="text-danger">
                                <td>image</td>
                                <td>String</td>
                                <td>Image for Item</td>
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
    "message": "item updated",
    "data": {
        "id": 1,
        "name": "name 1 edit",
        "image": "image.png",
        "created_at": "2021-08-05T04:36:50.000000Z",
        "updated_at": "2021-08-05T04:58:19.000000Z"
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
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/item/{id}</h6>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "success": true,
    "message": "item deleted"
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - DELETE --}}
    </div>
@endsection
