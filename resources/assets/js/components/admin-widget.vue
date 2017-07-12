
<template>
    <div class="admin-widget">
          <div class="btn-group-vertical" role="group" aria-label="...">
              <a href="http://localhost/digitalMenuBoard/public/admin"> <button type="button" class="btn btn-default">Dashboard</button></a>
              <a href="http://localhost/digitalMenuBoard/public/admin/register"> <button type="button" class="btn btn-default">Register</button></a>
              <a href="http://localhost/digitalMenuBoard/public/admin/show"> <button type="button" class="btn btn-default">Users</button></a>
              <a href="http://localhost/digitalMenuBoard/public/subscriber"> <button type="button" class="btn btn-default">Subscriber Dashboard</button></a>

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