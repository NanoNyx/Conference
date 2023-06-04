 <div style="text-align: center;">
        <h1>Реєстрація</h1>
        <form action="/users/register" method="post">
            <label>Ф.І.О.* <input type="text" name="nickname"></label>
            <br><br>
			
		<label>Стать*		
		<select>
		<option>---</option>
		<option>Жіноча</option>
		<option>Чоловіча</option>
		<option>Інша</option>
		</select>
		<label>	
		<br><br>
			
		 <label>Національність* <input type="text" name="nation"></label>
            <br><br>

		 <label>Назва організації* <input type="text" name="org"></label>
            <br><br>	

		<label>Посада* <input type="text" name="job"></label>
            <br><br>	
			
		<label for="start">Дата народження* </label>
		
		<input type="date" id="start" name="trip-start"
		value="2000-01-01"
		min="1960-01-01" max="2018-01-01">
            <br><br>	
	   
        <label>Email* <input type="text" name="email"></label>
            <br><br>
	
         <input type="submit" value="Зареєструватись">
        </form>
    </div>