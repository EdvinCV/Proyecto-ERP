@extends('layout')
@section('content')
    <template v-if="menu==4">
        <categoria></categoria>
    </template>
    <template v-if="menu==2">
        <Roles></Roles>
    </template>
    <template v-if="menu==3">
        <Permisos></Permisos>
    </template>
@endsection