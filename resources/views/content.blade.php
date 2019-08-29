@extends('layout')
@section('content')
    <template v-if="menu==1">
        <Roles></Roles>
    </template>
    <template v-if="menu==3">
        <Permisos></Permisos>
    </template>
@endsection