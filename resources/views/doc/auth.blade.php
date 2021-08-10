@extends('layouts.doc')
@section('container')
    <div class="container">
        <h4 class="text-center">Auth</h4>

        {{-- HTTP REQUEST - POST [Register] --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - POST [Register]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/register</h6>
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
                                <td>Full Name for User Registration</td>
                            </tr>
                            <tr class="text-danger">
                                <td>email</td>
                                <td>String</td>
                                <td>Email address for User Registration</td>
                            </tr>
                            <tr class="text-danger">
                                <td>password</td>
                                <td>String</td>
                                <td>Password for User Registration</td>
                            </tr>
                            <tr class="text-danger">
                                <td>password_confirmation</td>
                                <td>String</td>
                                <td>Password Confirmation for User Registration</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc doc">
<pre>
<code>
{
    "success": true,
    "message": "register success",
    "user": {
        "name": "rafi",
        "email": "rafi@mail.com",
        "updated_at": "2021-07-27T06:42:03.000000Z",
        "created_at": "2021-07-27T06:42:03.000000Z",
        "id": 1
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYmI5NTBiMTNkNzc5MmE3NWMyNGFlYzJiMzE3NGY4NzRmZmI4MmM3YzllYzllY2ViNTVlNGQ2YzA0ZTU1NzNiZWQxYjJhMzMzNGM0ZGJjMmYiLCJpYXQiOjE2MjczNjgxMjMsIm5iZiI6MTYyNzM2ODEyMywiZXhwIjoxNjU4OTA0MTIzLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.1xlhvHycXDuCPc3gSqH-tBPfT7vYeWZa7XJcJ8Wf-6exG8CP_270zGwcSjod-9cUv4VbDJTkzO4bJpOJygR38gySVMr8kc0ZdrHbh7rdu1IBAXM0cG5KQhXBUF09IfFxzWobwf6h8IEsfdfs00UtpVTc4jUqGUx61VcwWvnPU_nsjoqD4uzMUSymfG4zelUtr5Ri0ffS6YY2wRefTF2dr9K5eSegA6Nv9JXQN049PFSU7HXoNdSssfSSLOv3HNyaXsf1c7Uf8b5MoWDrJTUaurd_uG1_pNMGCMJ3zphcPI4KMZBoLqLYldzwGcoRQVaah_cZi2r-jz-Qn2sNwLelfopMUtPTsZ7fTGMeYuQpYge3A146tOMvUehM01S6T0DFHuCF0s8WxJzjOcBCEhD3IkDitr00RoMsmma0_UPJi_EI6lVLBXoQgbe2auRSNY3oz_2odU0GjXqaOf3kaLcK6w9Ki7NJYzG60NSVHhcNP96woASjvnbzBrZuiZ05M9esfRkjmZdhbag8w7571gJaxxzv9kektCCNhigjwp35QczWvwnWuIwpR5GTBFPqFl4A9geUiOTLTRoEvcziGGPkSRuF5Nf-VpgrjIRO1Inxm-sQ48beM7G5qjvZXsad6TPzy17ZTfk3ACT5-RDKqt9rZu8JwrqydDIsw0VI-QKZxbQ"
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - POST [Register] --}}

        {{-- HTTP REQUEST - POST [Login] --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - POST [Login]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/login</h6>
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
                                <td>email</td>
                                <td>String</td>
                                <td>Email address for User Login</td>
                            </tr>
                            <tr class="text-danger">
                                <td>password</td>
                                <td>String</td>
                                <td>Password for User Login</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<cod>
{
    "success": true,
    "message": "login success",
    "user": {
        "id": 1,
        "name": "rafi",
        "email": "rafi@mail.com",
        "email_verified_at": null,
        "created_at": "2021-07-27T06:42:03.000000Z",
        "updated_at": "2021-07-27T06:42:03.000000Z"
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDg4ZWMzOTgwODFlOGExNGYyZjgzZmFhNDk4NjBiYmQ0ZGIyOGM0NDJjMTdjODJlMmZlMTQ4MmNhOGM0YTYyNzJjNGUxNjQ2NGIwZDc5ZDQiLCJpYXQiOjE2MjczNjgyMzUsIm5iZiI6MTYyNzM2ODIzNSwiZXhwIjoxNjU4OTA0MjM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.AZ6RpZvePyYBrdRV5tYkE-qadwPekgVyv7LnNcJG4ubBJfITdmoKFZD101BfPmhCi_cU1Xov_0__ZjwPJzub8FIy5bn02Y2XauZPi8HMK0m5nHIJlIjuv287nfVeWtDlU-Y0umvymJDEfijUd1iim7b4zD4Ou63bDAhqARAbEoCbwBEG1ZWWz-DF6SmZh009KA5m5GD1H_ee-QTqWoAgWlvaAmMinFGDF_VJ8Ge4pcpj-yW4MyJrT60oW6obtnnlombp-Fme8V_WJlRwplYcGHG4VmkEzj3mKoQdqhPqr2cHoBFsUCqQlzFJZ2zQ0ixrl_5mxDDVdd0VYchuu5J_AFr4DCdt8jdolMpgn7eJWWBfAP9mcjG1b3TGen3xH6uWcHIqPRcuUez9l1WXEfUKYYbWDXooO3DQg58Lr3y8cyNnV5Kp0gKqV8EUUZdEXPwmmq2A-4MsSuPyeIkIYE3WC6xuB66hs8wz5dvE0MQ07JL-HWfKzn92BKu35_VclJKV5dTx49cDeFfCVT4A_JN8kjjdyLqNOfavFaZPPoz9E3IeTSJyLfZQCAT6j2aLeOryf6uk8vTtqlHpujDtTAax2OET3b7tYwBkqqHiSJGkgN1rcDAYYezcHsjHwlcC9tG7sJZu8C8JqIEHXW5S3-JBijDX0rQws3leoVTM0LfAFWk"
}
</cod</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - POST [Register] --}}

        {{-- HTTP REQUEST - Get [User] --}}
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">HTTP REQUEST - GET [User]</h5>
                <h6 class="card-subtitle mb-2 text-danger">http://localhost:8000/api/v1/user</h6>
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
                                <td>application/json</td>
                            </tr>
                            <tr class="text-danger">
                                <td>Authorization</td>
                                <td>Bearer + Token</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="card-subtitle mb-2">Contoh Request</h6>
                <div class="card px-2 doc">
<pre>
<code>
{
    "id": 1,
    "name": "rafi",
    "email": "rafi@mail.com",
    "email_verified_at": null,
    "created_at": "2021-07-27T06:42:03.000000Z",
    "updated_at": "2021-07-27T06:42:03.000000Z"
}
</code>
</pre>
                </div>
            </div>
        </div>
        {{-- HTTP REQUEST - Get [User] --}}
    </div>
@endsection
