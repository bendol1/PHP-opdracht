<?php

class Book
{

    protected $title;
    protected $publisher;
    protected $year;
    protected $price;


    public function __construct($new_title, $new_publisher, $new_year, $new_price)
    {
       


        $this->title = $new_title;
        $this->publisher = $new_publisher;
        $this->year = $new_year;
        $this->price = $new_price;

    }

    public function getTitle()
    {

       
         return $this->title;    }

    public function getPublischer()
    {
        return $this->publisher;
    }

    public function getYear()
    {
        
        return $this->year;
    }

    public function getPrice()
    {
        
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



$wiskunde = new Book("Wiskunde 101, een handleiding voor iedereen","","","");
$coding = new Book("Programmeren: frustratie is onderdeel van het leerpro.....","","2020","prijs:   99.00");
$natuurkunde = new Book("Natuurkunde: Er kan soms een appel op je hoofdvallen","","2017"," prijs: 45.50") ;




 


 echo $natuurkunde->getTitle(). "<br>";
 echo $natuurkunde->data(). "<br>";
 echo $natuurkunde->getYear(). "<br>";
 echo $natuurkunde->getPrice(). "<br>";
 

 


 



 echo $coding->getTitle(). "<br>";
 echo $coding->data(). "<br>";
 echo $coding->getYear(). "<br>";
 echo $coding->getPrice(). "<br>";

  
  
  
  * Opdracht 10
  *  De publischer kan nog niet 'ingevoerd' worden aan het object. Kun jij hier een method voor schrijven die dit bewerktstelligt, 
   * maar ook zodra dit gebeurt is dit meteen op het scherm toont. (hint: echo in method)
   * De publisher voor alle boeken is dezelfde: "De luie luipaard"
   */


 
