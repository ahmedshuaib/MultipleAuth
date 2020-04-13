<template>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-header">Login</div>
                   <div class="card-body">
                       <form>
                           <div class="form-group row">
                               <label for="email" class="col-md-4 col-form-label text-md-right">E-mail Address</label>
                               <div class="col-md-6">
                                   <input id="email" type="email" class="form-control" name="email">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</template>

<script>
    export default {
        name: "Login"
    }
</script>

<style scoped>

</style>
