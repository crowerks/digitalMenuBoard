
<template>
   <div class="subscriber-widget">
       <div class="btn-group-vertical" role="group" aria-label="...">
           <a href="http://localhost/digitalMenuBoard/public/subscriber"> <button type="button" class="btn btn-default">Dashboard</button></a>
           <a href="http://localhost/digitalMenuBoard/public/subscriber/products"> <button type="button" class="btn btn-default">Products</button></a>
           <a href="http://localhost/digitalMenuBoard/public/subscriber/trash"> <button type="button" class="btn btn-default">Trash Bin</button></a>
           <a href="http://localhost/digitalMenuBoard/public/subscriber/headings"> <button type="button" class="btn btn-default">Headings</button></a>
           <a href="http://localhost/digitalMenuBoard/public/subscriber/pricing"> <button type="button" class="btn btn-default">Pricing</button></a>
            <a href="http://localhost/digitalMenuBoard/public/subscriber/specials"> <button type="button" class="btn btn-default">Specials</button></a>
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