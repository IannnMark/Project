@extends('layouts.header')
@section('body')
<div class="container">
        <table id="itable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Town</th>
                    <th>City</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="ibody">
            </tbody>
        </table>
    </div>
</div>
@endsection