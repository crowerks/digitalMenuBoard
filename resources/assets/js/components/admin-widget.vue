
<template>
   <div class="admin-widget">
          <div class="btn-group-vertical" role="group" aria-label="...">
              <a v-bind:href="admin/register"> <button type="button" class="btn btn-default">Register</button></a>
              <a v-bind:href="admin/show"> <button type="button" class="btn btn-default">Users</button></a>
  </div>
  </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>