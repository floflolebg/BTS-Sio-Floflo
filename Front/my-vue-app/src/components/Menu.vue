<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <router-link to="/acceuil" class="nav-link">Acceuil</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/crm" class="nav-link">CRM</router-link>
        </li>

      </ul>
    </div>
  </nav>
</template>
<script>
</script>
<style scoped>
</style>