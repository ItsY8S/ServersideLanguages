<?php

function create_image($cap) {
    unlink("image.jpg");
    global $image;
    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);
    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

    for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }

    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }

    $text_color = imagecolorallocate($image, 0, 0, 0);

    ImageString($image, 22, 30, 22, $cap, $text_color);

    imagepng($image, "image.jpg");
}

create_image($data["cap"]);

echo "<img src='../image.jpg'>";

?>

<form action="/home/contactRecv" method="POST">
    <div>
        <label for="InputEmail1">Enter Captcha</label>
        <input name="captcha" type="captcha" id="captcha" placeholder="Captcha" />
    </div>

    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input name="email" type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" class="form-control" id="bio" rows="3"></textarea>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="male" id="male" value="male">
        <label class="form-check-label" for="male">
            Male
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="female" id="female" value="female">
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>

    <div class="form-check">
        <input name="newsletter" type="checkbox" class="form-check-input" id="checkboxNewsletter">
        <label class="form-check-label" for="checkboxNewsletter">Newsletter</label>
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <select name="age" class="form-control" id="age">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
            <option>46</option>
            <option>47</option>
            <option>48</option>
            <option>49</option>
            <option>50</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <input type="button" class="btn" value="Ajax Submit" id="ajaxSubmit" />
</form>


<script>
    $("#ajaxSubmit").click(function() {
    $.ajax({
    method: "POST",
    url: "/home/ajaxPars",
    data: { "email": $("#inputEmail").val(), "password": $("#inputPassword").val() },
    success: function(msg) {
        console.log(msg);
        if(msg == "welcome") {
            alert("welcome")
        }
        else {
            alert("bad login")
        }
    }
    })
})  
</script>