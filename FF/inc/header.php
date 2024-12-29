<header class="header">
	<h2 class="u-name">Task <b>Pro</b>
		<label for="checkbox">
			<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
		</label>
	</h2>
	<span class="notification" id="notificationBtn">
		<i class="fa fa-bell" aria-hidden="true"></i>
		<span id="notificationNum"></span>
	</span>
</header>
<div class="notification-bar" id="notificationBar">
	<ul id="notifications">
	</ul>
</div>

<script type="text/javascript">
	var openNotification = false;

	const notification = ()=> {
		let notificationBar = document.querySelector("#notificationBar");

		if (openNotification) {
			notificationBar.classList.remove('open-notification');
			openNotification = false;
		}else {
			notificationBar.classList.add('open-notification');
			openNotification = true;
		}
	}

	let notificationBtn = document.querySelector("#notificationBtn");
	notificationBtn.addEventListener("click", notification);
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch("app/notification-count.php")
            .then(response => {
                if (!response.ok) {
                    throw new Error("A network error occurred!");
                }
                return response.text();
            })
            .then(data => {
                document.querySelector("#notificationNum").innerHTML = data;
            })
            .catch(error => console.error("Error: ", error));

        fetch("app/notification.php")
            .then(response => {
                if (!response.ok) {
                    throw new Error("A network error occurred!");
                }
                return response.text();
            })
            .then(data => {
                document.querySelector("#notifications").innerHTML = data;
            })
            .catch(error => console.error("Error: ", error));
    });
</script>
