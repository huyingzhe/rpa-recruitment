
function Client(){
	now = new Date(),hour = now.getHours() 
	if(hour < 6){document.write("凌晨好！")} 
	else if (hour < 9){document.write("早上好！")} 
	else if (hour < 12){document.write("上午好！")} 
	else if (hour < 14){document.write("中午好！")} 
	else if (hour < 17){document.write("下午好！")} 
	else if (hour < 19){document.write("傍晚好！")} 
	else if (hour < 22){document.write("晚上好！")} 
	else {document.write("夜里好！")} 
}
