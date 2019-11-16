<?php

class Book
{

    protected $title;
    protected $publisher;
    protected $year;
    protected $price;


    public function __construct($new_title, $new_publisher, $new_year, $new_price)
    {
        /* Opdracht 1
         * maak de constructor af
         * Zorg ervoor dat het boek een titel krijgt
         */


        $this->title = $new_title;
        $this->publisher = $new_publisher;
        $this->year = $new_year;
        $this->price = $new_price;

    }

    public function getTitle()
    {

        /* Opdracht 2
         * maak de return statement af.
         * Zorg ervoor dat je de title van het boek ophaalt.
         */
         return $this->title;    }

    public function getPublischer()
    {
        return $this->publisher;
    }

    public function getYear()
    {
        /* Opdracht 3
         *  Schrijf code om het jaar op te halen 
         *  Maak deze hier...
         */
        return $this->year;
    }

    public function getPrice()
    {
        /* Opdracht 4
         *  Er gaat iets mis met deze method... zie je de fout? Kan je deze verbeteren?
         */
        return $this->price;
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
 
    public function data() {
       return $this->publisher = "De luie luipaard";
        
    }

    public function update($new_publisher) {
        
       return $this->publisher = "De luie luipaard";



       


    }
}


/* Opdracht 5. maak 3 objecten voor 3 verschillende boeken, De boeken hebben de volgende titels:
 *  1. "Wiskunde 101, een handleiding voor iedereen"
 *  2. "Programmeren: frustratie is onderdeel van het leerpro....."
 *  3. "Natuurkunde: Er kan soms een appel op je hoofdvallen"
 * Tip: denk aan de constructor....
 */
$wiskunde = new Book("Wiskunde 101, een handleiding voor iedereen","","","");
$coding = new Book("Programmeren: frustratie is onderdeel van het leerpro.....","","2020","prijs:   99.00");
$natuurkunde = new Book("Natuurkunde: Er kan soms een appel op je hoofdvallen","","2017"," prijs: 45.50") ;



/* Opdracht 6. Codeer een prijs en jaartal voor het natuurkunde boek.
 *                                                          prijs:   45.50
 * maak gebruik van de methods!                             jaartal: 2017
 */

 

 /*   
  * Opdracht 7
  *  Toon de 'title', het 'jaartal'  en de 'prijs' van het natuurkunde boek op het scherm met behulp van de methods
  */
 echo $natuurkunde->getTitle(). "<br>";
 echo $natuurkunde->data(). "<br>";
 echo $natuurkunde->getYear(). "<br>";
 echo $natuurkunde->getPrice(). "<br>";
 

 /* Opdracht 8. Codeer een prijs en jaartal voor het coding boek.
 *                                                          prijs:   99.00
 *  maak gebruik van de methods!                            jaartal: 2020
 */


 


 /*   
  * Opdracht 9
  *  Toon de 'title', het 'jaartal'  en de 'prijs' van het codingboek op het scherm met behulp van de methods
  */
 echo $coding->getTitle(). "<br>";
 echo $coding->data(). "<br>";
 echo $coding->getYear(). "<br>";
 echo $coding->getPrice(). "<br>";

  
  
  /*   
  * Opdracht 10
  *  De publischer kan nog niet 'ingevoerd' worden aan het object. Kun jij hier een method voor schrijven die dit bewerktstelligt, 
   * maar ook zodra dit gebeurt is dit meteen op het scherm toont. (hint: echo in method)
   * De publisher voor alle boeken is dezelfde: "De luie luipaard"
   */


 
