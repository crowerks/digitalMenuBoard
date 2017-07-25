
<template>
         <div id="sidebar-widget">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
             <br>
                <ul class="sidebar-nav">

                    <li>
                        <a href="http://34.212.187.129/admin">Dashboard</a>
                    </li>
                    <li>
                        <a href="http://34.212.187.129/admin/register">Register</a>
                    </li>
                    <li>
                        <a href="http://34.212.187.129/admin/show">Users</a>
                    </li>
                </ul>

             </div>



        <!-- /#wrapper -->

      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Panel</a>
      </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
