@extends('layouts.app')
@section('content')
<section class="pxp-page-header-simple">
    <div class="pxp-container text-center">
    <!-- The toolbar will be rendered in this container. -->
    <div id="toolbar-container"></div>

    <!-- This container will become the editable. -->
    <div id="editor" class="border border-primary">
        <table class="table table-success table-striped">
            <tr>
                <th>Full Name:</th>
                <td>
                    {{$data['profile']->first_name.' '.$data['profile']->last_name}}
                </td>
            </tr>
        </table>
    </div>
    </div>
</section>
@endsection
