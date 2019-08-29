@extends('layout')
@section('content')
    <categoria></categoria>
    <template v-if="menu==2">
        <Roles></Roles>
    </template>
    <template v-if="menu==3">
        <Permisos></Permisos>
    </template>
@endsection