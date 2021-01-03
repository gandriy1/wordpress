<?php
/* Classes. */

class Service {
    public $name;
    public $description;
    public $images;
    public $work_types;
    public $faq;

    function __construct($name, $description, $images, $work_types, $faq) {
        $this->name = $name; 
        $this->description = $description; 
        $this->images = $images; 
        $this->work_types = $work_types; 
        $this->faq = $faq; 
    }
}

class FAQ {
    public $question;
    public $answer;

    function __construct($question, $answer){
        $this->question = $question; 
        $this->answer = $answer; 
    }
}

/* Data. Can be retreived from DB later. */
$faq = array(
    new FAQ(
        'What is the average patio size in a downtown Toronto house?', 
        'That all depends on the lot size that you have, in downtown Toronto the lots can be very narrow, (16’ across), which would mean a patio roughly 12’x10’ while larger lots can be anywhere from 12’x16’ or even 14’x16’.'
    ),
    new FAQ(
        'Do we give free estimates?', 
        'Yes, the quotation is always free of charge. We are pleased to provide detailed and in-depth estimates that are customized to your property. We provide our quotations in very clear sections of work that are easy to understand and modify should the need arise.'
    ),
    new FAQ(
        'How much does it cost for an average interlocking patio in Toronto?', 
        'The average price for an interlocking patio varies and is dependant on a number of factors. For example if access is not large enough for bobcat to get through then the price will be higher due to all the work being done by labourers. In terms of average price it ranges anywhere from $10,000 to $15,000.'
    ),
    new FAQ(
        'How long does permit take for a typical landscaping project in Toronto?', 
        'A building permit takes, can take anywhere from 5 to 20 business days depending on the project’s size & class determination, and whether or not all required documents align with Toronto zoning and by law requirements. Residents can apply for the Residential FASTTRACK, which is a maximum of 100 m2 of construction; this process can take 5-7 business days'
	),
	new FAQ(
        'How much will the project cost?', 
        'Landscaping is not a one-price-fits-all industry. When looking for a landscape company, you must be able to trust them and know that they are going to stay within your budget. We strive to learn exactly what it is that you want in your landscape and what your budget will be to accomplish your dream yard. We will ask a series of questions to make sure that we are building the landscape according to your vision.'
    )
);

$stonework = new Service(
    'Stonework',
     'Our team can builds interlocking driveways, patios, walkways. We specialize in laying down a unique looking interlocking using a number of different pavers to create a decorative pattern that will look much better than plain concrete or asphalt. We have a number of patterns for you to choose from. We work with the best manufacturers only and our team will help you to choose the best option of combination of materials to best suit your needs and budget.', 
    array("stonework/stonework1.jpg","stonework/stonework2.jpg","stonework/stonework3.jpg","stonework/stonework4.jpg","stonework/stonework5.jpg"),
    array("Driveways","Walkways","Retaining Walls","Flagstone"),
    array($faq[0],$faq[1],$faq[2])
);

$woodwork = new Service(
    'Woodwork',
     'Our team can builds decks, fences, trellises, pergolas and any other type of custom woodwork. We build decks of any complexity for residential projects. Our woodworking division has all it takes to work with any material you select, either its a wood from local supplier, or exotic hardwoods ordered from other countries. Check out our gallery below for examples of our projects.', 
    array("decks/decks2.jpg","fences/fences2.jpg","decks/decks3.jpg","fences/fence4.jpg","decks/decks7.jpg","decks/decks8.jpg"),
    array("Decks","Fences","Pergolas","Trellises"),
    array($faq[3],$faq[4],$faq[2])
);

$sodding = new Service(
    'Sodding & Planting',
     'Our team can builds decks, fences, trellises, pergolas and any other type of custom woodwork. We build decks of any complexity for residential projects. Our woodworking division has all it takes to work with any material you select, either its a wood from local supplier, or exotic hardwoods ordered from other countries. Check out our gallery below for examples of our projects.', 
    array("decks/decks2.jpg","fences/fences2.jpg","decks/decks3.jpg","fences/fence4.jpg","decks/decks7.jpg","decks/decks8.jpg"),
    array("Decks","Fences","Pergolas","Trellises"),
    array($faq[3],$faq[4],$faq[2])
);

$water_features = new Service(
    'Water Features',
     'Our team can builds decks, fences, trellises, pergolas and any other type of custom woodwork. We build decks of any complexity for residential projects. Our woodworking division has all it takes to work with any material you select, either its a wood from local supplier, or exotic hardwoods ordered from other countries. Check out our gallery below for examples of our projects.', 
    array("decks/decks2.jpg","fences/fences2.jpg","decks/decks3.jpg","fences/fence4.jpg","decks/decks7.jpg","decks/decks8.jpg"),
    array("Decks","Fences","Pergolas","Trellises"),
    array($faq[3],$faq[4],$faq[2])
);

$design = new Service(
    'Design',
     'Our team can builds decks, fences, trellises, pergolas and any other type of custom woodwork. We build decks of any complexity for residential projects. Our woodworking division has all it takes to work with any material you select, either its a wood from local supplier, or exotic hardwoods ordered from other countries. Check out our gallery below for examples of our projects.', 
    array("decks/decks2.jpg","fences/fences2.jpg","decks/decks3.jpg","fences/fence4.jpg","decks/decks7.jpg","decks/decks8.jpg"),
    array("Decks","Fences","Pergolas","Trellises"),
    array($faq[3],$faq[4],$faq[2])
);

$lighting = new Service(
    'Outdoor Lighting',
     'Our team can builds decks, fences, trellises, pergolas and any other type of custom woodwork. We build decks of any complexity for residential projects. Our woodworking division has all it takes to work with any material you select, either its a wood from local supplier, or exotic hardwoods ordered from other countries. Check out our gallery below for examples of our projects.', 
    array("decks/decks2.jpg","fences/fences2.jpg","decks/decks3.jpg","fences/fence4.jpg","decks/decks7.jpg","decks/decks8.jpg"),
    array("Decks","Fences","Pergolas","Trellises"),
    array($faq[3],$faq[4],$faq[2])
);

/* Setup */

$services = array(
	"stonework" => $stonework,
	"woodwork" => $woodwork,
	"sodding" => $sodding,
	"water_features" => $water_features,
	"design" => $design,
	"lighting" => $lighting,
);