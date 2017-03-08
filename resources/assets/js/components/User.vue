<template>
<div class="container">
    <h1>User Info:</h1>
    <div class="form-horizontal" >
	    	<div class="form-group">
	                            <label for="name" class="col-md-4 control-label">Name</label>

	                            <div class="col-md-6">
	                                <input id="name" type="text" class="form-control" name="name" v-model="user.name" autofocus v-bind:readonly="isNotEditable">
	                            </div>
	             </div>

	             <div class="form-group">
	                            <label for="phone_number" class="col-md-4 control-label">Phone</label>

	                            <div class="col-md-6">
	                                <input id="phone_number" type="text" class="form-control" name="phone_number" v-model="user.phone_number" v-bind:readonly="isNotEditable">
	                            </div>
	             </div>

	             <div class="form-group">
	                            <label for="password" class="col-md-4 control-label">Password</label>

	                            <div class="col-md-6">
	                                <input id="password" type="text" class="form-control" name="password" v-model="user.password" v-bind:readonly="isNotEditable">
	                                <button v-bind:href="url" v-on:click="setUserPhone" class="btn btn-primary">{{ buttonStatus }}</button>
	                            </div>
	             </div>
    </div>
 </div>

</template>

<script>
    export default {
        props: ['userId'],
        data: function() {
            return {
                user: {
                    name: '',
                    phone_number: '',
                    password: ''
                },
                url: 'api/user/' + this.userId,
                isNotEditable: true,
                buttonStatus: 'Edit'
            };
        },






        mounted: function() {
        	var Vue = require('vue');
	Vue.use(require('vue-resource'));
             this.getUser();
        },
        
        methods: {
            getUser: function() {
                this.$http.get('api/user/'+ this.userId).then(function (response) {
                    this.user.name = response.data.name;
                    this.user.phone_number = response.data.phone_number;
                    this.user.password = response.data.password
                });
            },
            setUserPhone: function() {
            		if(this.buttonStatus == 'Edit')
            		{
            			this.isNotEditable = false;
            			this.buttonStatus = 'Save';
            		}
            		else
            		{
	            		this.$http.put(this.url, this.user);
	            		this.buttonStatus = 'Edit';
	            		this.isNotEditable = true;

            		}
            }
        }
       }
</script>

