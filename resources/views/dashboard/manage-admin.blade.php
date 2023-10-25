@extends('layout.app-2')

@section('title', 'Dashboard Manage Admins')

@section('breadcrumb', '/Manage Admins')

@section('content')
    <table class="admin-table mt-5">
        <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td class="d-flex align-items-center gap-3">
                <a  class="edit" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="delete" href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>July Dooley</td>
            <td>july@example.com</td>
            <td class="d-flex align-items-center gap-3">
                <a class="edit" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="delete" href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mary Moe</td>
            <td>mary@example.com</td>
            <td class="d-flex align-items-center gap-3">
                <a class="edit" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="delete" href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>July Dooley</td>
            <td>july@example.com</td>
            <td class="d-flex align-items-center gap-3">
                <a class="edit" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="delete" href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Mary Moe</td>
            <td>mary@example.com</td>
            <td class="d-flex align-items-center gap-3">
                <a class="edit" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a  class="delete" href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td class="d-flex align-items-center gap-3">
                <a class="edit" href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="delete" href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection