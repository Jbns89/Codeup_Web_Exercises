var myHTML = " ";
var newPost = " ";
var posts = 
[
    {
        'date': 'June 5, 2014',
        'title': 'Im a blog!',
        'content': 'Keytar wayfarers cliche, chambray raw denim disrupt plaid. Try-hard artisan iPhone pop-up, butcher normcore keffiyeh chambray sartorial umami Vice pickled Pinterest. Mumblecore Carles quinoa, Godard tote bag freegan cornhole +1 roof party chambray paleo twee. Vice actually organic, hella stumptown distillery Thundercats Helvetica Cosby sweater Echo Park. Master cleanse occupy Pitchfork, before they sold out Banksy keytar Portland. Skateboard Tonx freegan, Pitchfork kogi raw denim vegan. Mustache chambray 90s, disrupt art party crucifix PBR&B freegan letterpress Cosby sweater Kickstarter'
    },
    {
        'date': 'July 6, 2014',
        'title': 'Me Too!',
        'content': 'Odd Future PBR&B occupy XOXO Blue Bottle Echo Park. Banjo food truck semiotics lomo. Synth Cosby sweater Pinterest, PBR drinking vinegar Bushwick forage trust fund tofu brunch. Wayfarers brunch PBR, Brooklyn organic craft beer seitan literally roof party four loko fashion axe lo-fi Marfa skateboard letterpress. Swag viral sartorial YOLO skateboard, banh mi plaid pickled church-key DIY. Whatever Bushwick pop-up sustainable, cray trust fund slow-carb banh mi flannel mixtape post-ironic 8-bit High Life. Pickled craft beer Neutra, banjo vegan Pitchfork kitsch synth yr.'
    },
    {
        'date': 'August 7, 2014',
        'title': 'Me Three!',
        'content': 'Tumblr Pinterest tote bag, master cleanse High Life try-hard raw denim seitan. Master cleanse fingerstache lomo gluten-free tofu, gastropub chia semiotics flexitarian photo booth cliche swag. Meh authentic locavore PBR hashtag, Helvetica Schlitz gastropub Austin Pinterest before they sold out. Mustache Schlitz single-origin coffee, brunch mixtape master cleanse cornhole meh plaid swag four loko kogi cray try-hard keffiyeh. XOXO ethical locavore messenger bag Odd Future meggings gentrify, kogi pork belly skateboard asymmetrical wolf McSweeneys biodiesel. PBR&B church-key High Life, YOLO artisan kogi Pinterest cred organic Pitchfork. Selvage pug VHS before they sold out retro, pickled mixtape Echo Park aesthetic master cleanse 90s meh art party bitters paleo.'
    },
    {
        'date': 'September 3, 2014',
        'title': 'Me Four!',
        'content': 'Pork belly mixtape pickled, Portland deep v lomo shabby chic dreamcatcher brunch paleo viral art party disrupt. Bicycle rights selvage Schlitz before they sold out. Bushwick freegan paleo meh synth. Cliche wolf salvia kale chips pickled biodiesel, Brooklyn hashtag chambray Vice. IPhone master cleanse pour-over, +1 Bushwick wayfarers stumptown DIY pork belly literally sriracha squid. 90s narwhal mustache, direct trade Banksy cornhole kitsch banh mi flexitarian. Mustache Neutra banjo lo-fi.'
    }
];
posts.forEach(function(post) {
    myHTML += "<div class='blogSpace'>"
    myHTML += "<h1>" + post.title + "</h1>";
    myHTML += "<h6>" + moment(post.date).fromNow() + "</h6>";
    myHTML += "<p>" + post.content + "</p>";
    myHTML += "</div>"
    
    newPost = document.getElementById('postingArea');
    newPost.innerHTML = myHTML;
});

