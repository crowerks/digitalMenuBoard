
<template>
         <div id="sidebar-widget">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
             <br>
                <ul class="sidebar-nav">

                    <li>
                        <a href="http://localhost/digitalMenuBoard/public/admin">Dashboard</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalMenuBoard/public/admin/register">Register</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalMenuBoard/public/admin/show">Users</a>
                    </li>
                </ul>
             </div>

             <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Panel</a>

         </div>
        <!-- /#wrapper -->
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
