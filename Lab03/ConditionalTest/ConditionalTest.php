<html>
    <head>
        <title>Conditional Test</title>
    </head>
    <body>
    <?php
        $first = $_GET["firstName"]; $middle = $_GET["middleName"]; $last = $_GET["lastName"];
        print("Hi $first! Your full name is $last $middle $first. <br></br>");
        if($first == $last){
            print("$first and $last are equal");
        }
        if($first < $last){
            print("$first is less than $last");
        }
        if($first > $last){
            print("$first is greater than $last");
        }
        print("<br></br>");
        $grade1 = $_GET["grade1"]; $grade2 = $_GET["grade2"];
        $final = (2 * $grade1 + 3 * $grade2) / 5;
        if($final > 89){
            printf("Your final grade is %.1f. You got an A. Congratulation!", $final);
            $rate = "A";
        }else if($final > 79){
            printf("Your final grade is %.1f. You got an B.", $final);
            $rate = "B";
        }else if($final > 69){
            printf("Your final grade is %.1f. You got an C.", $final);
            $rate = "C";
        }else if($final > 59){
            printf("Your final grade is %.1f .You got an D.", $final);
            $rate = "D";
        }else if($final > 39){
            printf("Your final frade is %.1f. You got an E.", $final);
            $rate = "E";
        }else if($final >0){
            printf("Your final grade is %.1f. You got an F.", $final);
            $rate = "F";
        }else{
            printf("Illegal grade less than 0. Finale grade = %.1f", $final);
            $rate = "Illegal";
        }
        print("<br></br>");
        switch ($rate) {
            case "A":
                print("Exellent!");
                break;
            case "B":
                print("Good!");
                break;
            case "C":
                print("Not bad!");
                break;
            case "D":
                print("Normal!");
                break;
            case "E":
                print("Too bad!");
                break;
            case "F":
                print("You have to try again!");
                break;
            default:
                print("Illegal grade!");
                break;
        }
    ?>
    </body>
</html>