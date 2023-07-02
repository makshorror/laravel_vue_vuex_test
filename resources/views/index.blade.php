@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div
                class="collapse navbar-collapse"
                id="navbarText"
            >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link
                            to="/"
                            class="nav-link"
                        >Главная
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link
                            :to="{ name: 'person.index' }"
                            class="nav-link"
                        >Персонал
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link
                            :to="{ name: 'person.create' }"
                            class="nav-link"
                        >Добавить
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <router-view></router-view>
    </div>
@endsection

