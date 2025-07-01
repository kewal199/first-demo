<div>
   <h2>User Form 2</h2>

   <form action="userform2" method="post">
    @csrf
  <h5> User Skills</h5>
    <input type="checkbox" name="skill[]" value="Php" id="php">
    <label for="php">PHP</label>
    <input type="checkbox" name="skill[]" value="Node" id="node">
    <label for="node">Node</label>
    <input type="checkbox" name="skill[]" value="Java" id="java">
    <label for="java">Java</label> 

    <h5> Gender</h5>
    <input type="radio" name="gender" value="Male" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="Female" id="female">
    <label for="female">Female</label>

    <h5>City</h5>
    <select name="city">
        <option value="Nagpur"> Nagpur</option>
        <option value="Pune">Pune</option>
        <option value="HYD"> HYD</option>
    </select>

    <h5>Age</h5>
    <input type="range" name="age" max="100" min="18"><br>
  <button>Add USer</button>
   </form>
</div>
