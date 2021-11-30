<template>
   <div>
        <Breadcrumb activename="Users"></Breadcrumb>
         <h2 class="intro-y text-lg font-medium mt-10">Data List Layout</h2>

            <div class="card-body">
                 <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                    <ModalButton icon="fas fa-plus"  label="Add User"  v-on:activemodal="openModal($event)">
                        Add User
                    </ModalButton>
                </div>
                <content-placeholders v-if="loading">
                    <content-placeholders-heading :img="true"/>
                    <content-placeholders-text :lines="1"/>
                    <content-placeholders-heading :img="true"/>
                    <content-placeholders-text :lines="1"/>
                    <content-placeholders-heading :img="true"/>
                    <content-placeholders-text :lines="1"/>
                    <content-placeholders-heading :img="true"/>
                    <content-placeholders-text :lines="1"/>
                </content-placeholders>
                <user-table></user-table>
            </div>

  <vs-dialog overflow-hidden full-screen v-model="active_modal">
        <template #header>
          <h4 class="not-margin">
            Welcome to <b>Vuesax</b>
          </h4>
        </template>


        <div class="con-form">
          <vs-input placeholder="Email">
            <template #icon>
              @
            </template>
          </vs-input>
          <vs-input type="password"  placeholder="Password">
            <template #icon>
              <i class='bx bxs-lock'></i>
            </template>
          </vs-input>
          <div class="flex">
            <vs-checkbox >Remember me</vs-checkbox>
            <a href="#">Forgot Password?</a>
          </div>
        </div>

        <template #footer>
          <div class="footer-dialog">
            <vs-button block>
              Sign In
            </vs-button>

            <div class="new">
              New Here? <a href="#">Create New Account</a>
            </div>
          </div>
        </template>
      </vs-dialog>

   </div>
</template>
<script>
import UserTable from './UserTable.vue'
import Breadcrumb from '../../components/Breadcrumbs.vue'
import Form from './UserForm.vue'
import ModalButton from '../../components/Button.vue'
 export  default{
    components:{
        Breadcrumb,
        UserTable,
        Form,
        ModalButton
    },
    data(){
        return{
            loading:false,
            active_modal:false,
        }
    },
    methods:{
        loadingStart(value) {
            this.loading = value;
        },
        openModal(val){
             return this.active_modal=val;
            },
        getUser(){
             this.loading=true;
        }
    },
    mounted(){
       this.getUser();
     }

}

</script>
