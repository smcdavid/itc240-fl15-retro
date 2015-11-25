drop table if exists Beers;
create table Beers
( BeerID int unsigned not null auto_increment primary key,
Beertype varchar(50),
Brand varchar(50),
Beername varchar(50),
Description text
);
insert into Beers values (NULL,"Indian Pale Ale","Elysian","Space Dust","The hopping is pure starglow energy, with Chinook to bitter and late and dry additions of Citra and Amarillo.");
insert into Beers values (NULL,"Red Ale","Elysian","Men's Room","The Mens Room Original Red is brewed for The Mens Room Radio Show on 99.9 KISW The Rock of Seattle.");
insert into Beers values (NULL,"Indian Pale Ale","Elysian","The Immortal","A Northwest interpretation of a classic English style, golden copper in color and loaded with New World hop flavor and aroma. Extremely drinkable.");
insert into Beers values (NULL,"Indian Pale Ale","Pyramid","A Medley of Hops","A moving medley of hops that harmonizes together. The result is an IPA bursting with rich citrus hop aromas and a balanced depth of flavor.");
insert into Beers values (NULL,"Indian Pale Ale","Schooner Exact","3-Grid","A blend of Yakima hops give this northwest-style IPA a big, juicy, tropical, citrus flavor. The light caramel and soft bready malts balance but don't interfere with the big hop character. It finishes dry leaving you ready for more hoppy goodness.");
insert into Beers values (NULL,"Brown Ale","Schooner Exact","King Street","The milk chocolate and hazelnut malt profile in this brown ale blends seamlessly with a mild English hop presence. Finishing dry with just enough bitterness to balance is what makes this beer perfect for pairing with a variety of foods.");
insert into Beers values (NULL,"Indian Pale Ale","Fremont Brewing","Interurban","Named after Fremont’s most famous outdoor sculpture, Waiting for the Interurban, Interurban India Pale Ale offers the adventurous beer lover a warm embrace of roasted pale malt swirled with a hand-selected blend of flavor malts and filled with the rich spice of Chinook, Centennial, and Amarillo hops. Interurban India Pale is eminently drinkable throughout the year.");
insert into Beers values (NULL,"Amber Ale","New Belgium","Fat Tire","Named in honor of our co-founder's bike trip through Europe, Fat Tire Amber Ale marks a turning point in the young electrical engineer's home brewing.");
insert into Beers values (NULL,"Golden Artisan Ale","Pike Brewing","Naughty Nellie","Golden ale with biscuity malt and lemony-grapefruit hop character.");
insert into Beers values (NULL,"Indian Pale Lager","Pyramid","IPL","Pyramid IPL combines the citrusy hop flavors of a Northwest IPA with the smooth finish of a Lager.");
insert into Beers values (NULL,"Ruby Ale","Pike Brewing","Kilt Lifter","Sweet malt and a wee bit of smokiness in this Scotch style ale.");
insert into Beers values (NULL,"Porter","Schooner Exact","Profanity Hill","Blending seven different malts to produce flavors of chocolate and walnuts, this rich mahogany porter has subtle fruity notes. A moderate bitterness balances the roasted malt, and a dry finish carries through to the end.");

insert into Beers values (NULL,"Session Indian Pale Ale","New Belgium","Slow Ride","A blend of eight hop varieties, led by exotic Mosaic and Nelson Sauvin, twist together brilliant tropical scents of melon, peach, lime and grapefruit for a vividly fruity aroma.");
insert into Beers values (NULL,"Pale Ale","Fremont Brewing","Session","We dedicate this beer to you, Craft Beer Fan, for embracing adventure, creativity, facial hair, and the skilled craft people of our industry above all. This session pale ale is made with Citra and Simcoe hops grown in Washington’s Yakima Valley which will enlighten your mind and make you a smarter and better looking person…Because Beer Matters.");
insert into Beers values (NULL,"Pale Ale","Georgetown Brewing Co.","Manny's","A careful selection of Northwest hops, premium barley, and our unique yeast give this ale a rich and complex malty middle with a snappy hop finish. Crisp, clean and smooth with hints of citrus and fruit.");
insert into Beers values (NULL,"Indian Pale Ale","Georgetown Brewing Co.","Lucille","Floral, citrusy and awesome. Anything so innocent and built like that just gotta be named Lucille.");
insert into Beers values (NULL,"Indian Pale Ale","Big Time Brewery","Scarlet Fire","Bigger and hoppy than Bhagwan’s. Brewed with a technique known as First Wort Hopping. Creating a bold hop flavor and a floral hop flavor with a touch of grapefruit in the finish. Dry Hopped with Centennial.");
insert into Beers values (NULL,"Saison","Black Raven","Fresh Hop","Each year at hop harvest, we pick a hop varietal to grab right off the field and rush to the brewery. This year we used over 300 pounds of freshly picked, wet Amarillo hop cones in this saison. Fresh hops beers can only be brewed at harvest, which is typically August/September each year in Washington.");
insert into Beers values (NULL,"Porter","Mac and Jack's","Blackcat","Hints of chocolate and coffee accent this rich and creamy brew. Blackcat’s smooth approachable flavor demonstrates that dark beers can be enjoyed by all. Our traditional Porter features five select specialty malts, English Ale yeast and fresh Northwest hops. Blackcat is clean and crisp, yet complex and flavorful. A superbly balanced beer that is drinkable any time of the year.");
insert into Beers values (NULL,"White Russian Imperial Stout","Naked City","The Big Lebrewski","This annual fall to winter seasonal is a bold, rich Imperial Cream Stout aged on Kahlua soaked oak. Chocolate and coffee notes mingle perfectly in this full bodied White Russian Imperial Stout. This beer definitely abides.");
