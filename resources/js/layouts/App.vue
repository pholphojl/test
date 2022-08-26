<template>
  <div>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <router-link class="navbar-brand" :to="{name: 'Home'}"> Home</router-link>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <router-link class="nav-link text-white" :to="{name: 'Login'}">Login </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link text-white" :to="{name: 'Register'}">
                  Register</router-link
                >
              </li>
              <li class="nav-item">
                <router-link class="nav-link text-white" :to="{name: 'Dashboard'}">
                  Dashboard</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <router-view></router-view>
    </div>
  </div>
</template>
