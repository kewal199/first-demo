<div>
    <form action="adduser" method="post">
     @csrf
    <div class="input-wrapper">
        <input type="text" name="username" placeholder="Enter user name">
    </div>
    <div class="input-wrapper">
        <input type="text" name="email" placeholder="Enter email">
    </div>  
    <div class="input-wrapper">
        <input type="text" name="city" placeholder="Enter city">
    <div>
        <div class="input-wrapper">
        <button>Add new user</button>
         <div>
    </form>
</div> 
<style>
input{
        border: 1px solid orange;
    width: 200px;
    height: 35px;
    color: orange;
}
.input-wrapper{
    margin:10px;
}
button{
     border: 1px solid orange;
    width: 200px;
    height: 35px;
    color: orange;
}
</style>

