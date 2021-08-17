/* =============== select input script ============ */

    $(document).ready(function() {

    $("#type").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#category").html("<option value='N/A'>Select Profile Category </option><option value='Teacher'>Teacher</option><option value='Doctor'>Doctor</option><option value='Techinician'>Techinician</option><option value='Animal Keeping'>Animal Keeping</option><option value='Agriculturist'>Agriculturist</option><option value='Lawyor'>Lawyor</option><option value='Nurse'>Nurse</option><option value='Burser'>Burser</option><option value='Sychologist'>Sychologist</option><option value='Mfasiri:'>Mfasiri:</option><option value='Interpreter'>Interpreter</option><option value='Journalist'>Journalist</option><option value='Press'>Press</option><option value='Master Ceremony (MC)'>Master Ceremony (MC)</option><option value='Driver'>Driver</option><option value='Dalali'>Dalali</option><option value='Security Guard'>Security Guard</option><option value='Other Works'>Other Works</option>");
        } else if (val == "INTERPRENOUR") {
            $("#category").html("<option value='N/A'>Select Profile Category </option><option value='Archtect'>Archtect</option><option value='Shop/ Market'>Shop/ Market</option><option value='Packing'>Packing</option><option value='Car Wash'>Car Wash</option><option value='Garage'>Garage</option><option value='Bar'>Bar</option><option value='Saloon'>Saloon</option><option value='Bakery'>Bakery</option><option value='Tution Center'>Tution Center</option><option value='Day care'>Day care</option><option value='School'>School</option><option value='Guest House'>Guest House</option><option value='Hotel'>Hotel</option><option value='Cafe'>Cafe</option><option value='Company'>Company</option><option value='Butcher'>Butcher</option><option value='Institute'>Institute</option><option value='Other Business Works'>Other Business Works</option>");

        }else if (val == "BUSINESS MAN") {
            $("#category").html("<option value='N/A'>Select Profile Category </option><option value='Archtect'>Archtect</option><option value='Shop/ Market'>Shop/ Market</option><option value='Packing'>Packing</option><option value='Car Wash'>Car Wash</option><option value='Garage'>Garage</option><option value='Bar'>Bar</option><option value='Saloon'>Saloon</option><option value='Bakery'>Bakery</option><option value='Tution Center'>Tution Center</option><option value='Day care'>Day care</option><option value='School'>School</option><option value='Guest House'>Guest House</option><option value='Hotel'>Hotel</option><option value='Cafe'>Cafe</option><option value='Company'>Company</option><option value='Butcher'>Butcher</option><option value='Institute'>Institute</option><option value='Other Business Works'>Other Business Works</option>");

        } else if (val == "POLITICIAN") {
            $("#category").html("<option value='N/A'>Select Profile Category </option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#category").html("<option value='N/A'>N/A</option>");

        } else if (val == "N/A") {
            $("#category").html("<option value='N/A'>Select Category</option>");

        }
    });


    /*===========sub element ===========*/
    $("#category").change(function() {
        var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#subcategory").html("<option value='Mathematics'>Mathematics</option><option value='Physics'>Physics</option><option value='Chemistry'>Chemistry</option><option value='Biology'>Biology</option><option value='History'>History</option><option value='Kiswahili'>Kiswahili</option><option value='English'>English</option><option value='Kiswahili for Foreigners'>Kiswahili for Foreigners</option><option value='Geography'>Geography</option><option value='Accounts'>Accounts</option><option value='Uchumi'>Uchumi</option><option value='Other Subjects'>Other Subjects</option>");
        } else if (val2 == "Doctor") {
            $("#subcategory").html("<option value='None Specialist'>None Specialist</option><option value='Children'>Children</option><option value='Mothers'>Mothers</option><option value='Skin'>Skin</option><option value='Bones'>Bones</option><option value='Muscles'>Muscles</option><option value='Hearts'>Hearts</option><option value='Operations'>Operations</option>");

        } else if (val2 == "Techinician") {
            $("#subcategory").html("<option value='Water Pumps'>Water Pumps</option><option value='Electronics'>Electronics</option><option value='Mechanics'>Mechanics</option><option value='Electrical'>Electrical</option><option value='Clothes'>Clothes</option>");

        } else if (val2 == "Animal Keeping") {
            $("#subcategory").html("<option value='Beef'>Beef</option><option value='Milk'>Milk</option><option value='Chickens (Kuku)'>Chickens (Kuku)</option>");

        } else if (val2 == "Shop/ Market") {
            $("#subcategory").html("<option value='Clothes'>Clothes</option><option value='Shoes'>Shoes</option><option value='Electronics'>Electronics</option><option value='Others'>Others</option>");

        } else if (val2 == "Saloon") {
            $("#subcategory").html("<option value='Baba Shop'>Baba Shop</option><option value='Ladies Saloon'>Ladies Saloon</option>");

        } else if (val2 == "School") {
            $("#subcategory").html("<option value='Primary'>Primary</option><option value='Secondary'>Secondary</option>");

        } else  {
            $("#subcategory").html("<option value='N/A'>N/A</option>");

        }
    });


});


/*================ end select inout v script =========== */