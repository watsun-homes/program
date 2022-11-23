<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

  <div id="container">

  </div>


    <script>

    var container = document.getElementById('container');

    for (let i = 0; i < 5; i++) {
      div = document.createElement('div');
      div.onclick = function() {
        alert('This is box #' + i);
      }
      container.appendChild(div);
    };

    const defo = {
      ai: {
        first: "達也",
        last: "サンプル"
      },
      ue: {
        air: "僕",
        umi: "私"
      }
    };

    const namaefun= function(namefun=defo) {
      console.log(`${namefun.ue.air}は${namefun.ai.first}`);
    }
    namaefun();

    const namae = (name=defo) => {
      console.log(`${name.ue.air}は${name.ai.first}`);
    }
    namae();

    const iti = (ni,san) => `${ni}の次は${san}`;
    console.log(iti("2","3"));


    const nanndemo = (firstname="僕は", land="タツヤ") => {
      if(!firstname){
        throw new error("firstnameミス");
      }
      if(!land){
        throw new error("landミス");
      }
      return `${firstname}of${land}`;
    };

    console.log(nanndemo());
    console.log(nanndemo("こんにちは", "ああ"));

    const person = (first,lasta) => ({
      fir: first,
      la: lasta
    });
    console.log(person("どう","かな"));
    //オブジェクトの返却

    const tahoe = {
      mountains: ["Freel","Rose","Tallac","Rubicon","Silver"],
      print: function(delay = 1000){
        setTimeout(() => {
          console.log(this.mountains.join(","));
          console.log([...this.mountains]);
        },delay)
      }
    }
    tahoe.print();

    const sandwhich = {
      bread: "dutch crunch",
      meat: "tuna",
      cheese: "swiss",
      toppings: ["lettuce", "tomato", "mustard"]
    };

    let {
      toppings,
      bread,
      meat,
      cheese
    } = sandwhich;
    bread = "変更します"
    console.log(bread);
    console.log(cheese);

    console.log(sandwhich.bread,sandwhich.toppings.join(","));
    console.log(toppings);



    const kansuudesuk = ({spouse: {lastregular: {firstregular}}}) => {
      console.log(`${firstregular} of tatuya`);
    };
    const regularPerson = {
      firstregular: "Bill",
      lastregular: "Hei",
      spouse: {
        firstregular: "家",
        lastregular: {
          firstregular: "深いよ"
        }
      }
    };
    kansuudesuk(regularPerson);

    const [,firsthira,] = ["ああ","いい","うう"];
    console.log(firsthira);

    const an = "Tailla";
    const en = 7879;
    const anen = () => {
      console.log(`Mt. ${an} is ${en} feet tall`);
    };
    const funHike = {an,en,anen};
    funHike.anen();
    anen(); //これだけでもいける



    function directions(...args){
      let [start, ...remaining] = args;
      let [finish, ...stops] = remaining.reverse();

      console.log(`drive through ${args.length} towns`);
      console.log(`start in ${start}`);
      console.log(`the destination is ${finish}`);
      console.log(`stopping ${stops.length} times in between`);
    };
    directions("Truckee", "Tahoe City", "Sunnyside", "Homewood", "Tahoma");




    const getFakePerson = async () => {
        try {
          const res = await fetch("https://api.randomuser.me/?nat=US&results=10");
          const { results } = await res.json();
          console.log(results);
        } catch (error) {
          console.error(error);
        }
      };
      getFakePerson();

    </script>

    <style>
    html{
      color: #000;
    }
    #container {
          display: flex;
          justify-content: space-around;
      }

      #container>div {
          height: 5em;
          width: 5em;
          background-color: purple;
      }
    </style>

</body>

</html>
