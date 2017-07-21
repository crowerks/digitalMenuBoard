
<template>
        <div id="wrapper">
              <!-- Sidebar -->
              <div id="sidebar-wrapper">
               <br>
                  <ul class="sidebar-nav">

                      <li>
                          <a href="http://localhost/digitalMenuBoard/public/subscriber">Dashboard</a>
                      </li>
                      <li>
                          <a href="http://localhost/digitalMenuBoard/public/subscriber/headings">Headings</a>
                      </li>
                      <li>
                          <a href="http://localhost/digitalMenuBoard/public/subscriber/products">Products</a>
                      </li>
                      <li>
                          <a href="http://localhost/digitalMenuBoard/public/subscriber/pricing">Pricing</a>
                      </li>
                      <li>
                          <a href="http://localhost/digitalMenuBoard/public/subscriber/specials">Specials</a>
                      </li>
                      <li>
                         <a href="http://localhost/digitalMenuBoard/public/subscriber/trash">Trash Bin</a>
                      </li>
                      <li>
                         <!--<a href="http://localhost/digitalMenuBoard/public/subscriber/gallery">Gallery</a>-->
                      </li>

                  </ul>
              </div>

              <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Panel</a>


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
