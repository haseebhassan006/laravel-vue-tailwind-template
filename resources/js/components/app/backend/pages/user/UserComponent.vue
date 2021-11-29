<template>
   <div>
        <Breadcrumb activename="Users"></Breadcrumb>
         <h2 class="intro-y text-lg font-medium mt-10">Data List Layout</h2>
        <user-table></user-table>
   </div>
</template>
<script>
import UserTable from './UserTable.vue'
import Breadcrumb from '../../components/Breadcrumbs.vue'
export  default{
    components:{
        Breadcrumb,
        UserTable,
    }
}
</script>
