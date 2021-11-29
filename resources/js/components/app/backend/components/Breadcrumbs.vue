<template>

        <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
             <a href="">{{activename}}</a>
             <i data-feather="chevron-right" class="breadcrumb__icon"></i>
             <a href="" class="breadcrumb--active">Dashboard</a>
        </div>

</template>
<script>
  export default{
      props:['activename'],



  }
</script>
