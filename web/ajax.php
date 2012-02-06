<!DOCTYPE html>
<html lang="da">
  <head>
  </head>
  <body>
    <?
               $random_text = array("Lav pandekager",
                                   "Tag i Zoologisk Have – dyrene savner dig",
                                   "Tag et karbad. Nøgenhed kan anbefales i denne forbindelse",
                                   "Tegn en tissemand",
                                   "Host – du har en varmrøget laks siddende fast i halsen",
                                   "Køb en kæle zebra",
                                   "Luk øjene og forstil dig du har lukkede øjne",
                                   "Vent på det bliver din fødselsdag. Se så skal du nok få den romkugle din kæreste ikke ville købe til dig den anden dag",
                                   "Se alle Lord of the Rings filmene – med ganske korte pauser mellem hver film",
                                   "Få lavet din stemme om. Gollum gjorde det i sin tid",
                                   "Poke samtlige brugere på Facebook",
                                   "Klap en kage - og slik kagecremen af fingrene",
                                   "Lyt alle dine gamle cder fra 1995 igennem ",
                                   "Øv dig på at vinke – hvem ved måske bliver du Danmarks næste regent",
                                   "Find ud af om vi er alene i universet",
                                   "Find ud af om fisk kan blive tørstige – og hvad drikker de i så fald?",
                                   "Byd dine naboer op til dans – de venter på dig ",
                                   "Lav Amerikanske pandekager",
                                   "Find ud af hvorfor Will Smith aldrig bliver ældre",
                                   "Byd dig selv op til dans",
                                   "Lav telfonfnis med dig selv",
                                   "Send forslag til hvad skal du lave - om hvad man skal lave på facebook",
                                   "Vind samtlige discipliner til OL",
                                   "Sig pænt goddag næste gang du ser Dalai Lama",
                                   "Undersøg hvordan en telefon virker. Spis derefter en laksesalat",
                                   "Undersøg om du er i live – nogen gange bliver man snydt",
                                   "Tøm din postkasse – jeg gider SIMPELTHEN ikke at gøre det mere",
                                   "Tal med dig selv – men ikke om kaniner dem ved du jo godt du ikke kan li",
                                   "Klip dine tånegle - ordentlig denne gang",
                                   "Besøg Dating.dk – det lige dig",
                                   "Spis noget chokolade og tjek kalorieantallet bagefter – og fortryd det hele.",
                                   "Lær at danse salsa – danse – ikke spise",
                                   "Skriv en hilsen til alle dine Facebook venner – selv dem du i virkeligheden ikke rigtigt kender",
                                   "Giv en bums et kærligt - men meget bestemt - kram.",
                                   "Løs alle verdens problemer",
                                   "Bliv det første menneske der går på stylter på månen",
                                   "Hvis du ikke har lært at tale – så er det ikke nogen dum idé at øve sig på",
                                   "Nyd en god slave vodka fra Aldi",
                                   "Google dig selv",
                                   "Tryk på banneret – og hjælp Danmark ud af den økonomiske krise",
                                   "Øv dig på at lytte efter hornugler",
                                   "Lad en lille en sive ud – ingen vil ligge mærke til det",
                                   "Beslut dig for om mad er noget for dig",
                                   "Tryk Like til denne side",
                                   "Tæl til 10.435",
                                   "Find antallet stavefejl på siden",
                                   "Sig Freddy Krueger 3 gange",
                                   "Hvis du er Superman så tag dig en flyvetur – hvis ikke så vent 7 sekunder",
                                   "Find ud af hvad GRZ står for",
                                   "Find ud af hvad-det-dersens-big-bang-var-for-noget",
                                   "Undersøg om du stadigvæk har 10 fingre",
                                   "Læs Pippi Langstrømpe igen og prøv derefter selv at løfte den hest",
                                   "Tag tøj på, det vil vi alle blive glade for",  
                                   "Lav origami blomster og edderkopper til en du holder af",
                                   "Gyng som du aldrig har gynget før");
               srand(time());
               $sizeof = count($random_text);
               $random = (rand()%$sizeof);
               print("$random_text[$random]");
               ?>
  </body>
</html>