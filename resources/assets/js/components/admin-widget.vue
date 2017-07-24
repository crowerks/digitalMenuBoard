
<template>
         <div id="sidebar-widget">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
             <br>
                <ul class="sidebar-nav">

                    <li>
                        <a href="{{url('/admin')}}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('/register')}}">Register</a>
                    </li>
                    <li>
                        <a href="{{url('/show')}}">Users</a>
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
