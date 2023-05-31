<?php

//array of all posts

// $Posts = [

//     1 => [
//         'postID' => 1,
//         'DateCreated' => '05/24/2023',
//         'Title' => 'About Me',
//         'Author' => 'Shangwe',
//         'Body' => 'I love to play sports'
//     ],
//     2 => [
//         'postID' => 2,
//         'DateCreated' => '05/24/2023',
//         'Title' => "Shangwe's Portfolio",
//         'Author' => 'Shangwe',
//         'Body' => 'I love to play soccer lol'
//     ],


// ];

// function getAllPosts() {
//     $Posts = [

//         1 => [
//             'postID' => 1,
//             'DateCreated' => '05/24/2023',
//             'Title' => 'Java vs Python: Which language to Learn in 2023?',
//             'Author' => 'Shangwe',
//             'Body' => "Java and Python are two popular programming languages that have gained significant traction in the software development industry. While both languages serve different purposes and have their own strengths and weaknesses, they have become go-to choices for developers worldwide. In this comparison, we will explore the key differences and similarities between Java and Python.
//             Java, developed by Sun Microsystems in the mid-1990s, is a statically-typed, object-oriented programming language. It is known for its robustness, scalability, and platform independence. Java applications run on the Java Virtual Machine (JVM), which allows them to be executed on any platform that supports Java.
//             Python, on the other hand, is a dynamically-typed, high-level programming language that emphasizes simplicity and readability. It was created by Guido van Rossum in the late 1980s and has gained popularity due to its ease of use and extensive standard library. Python's interpreted nature allows for rapid development and prototyping.
//             One of the key differences between Java and Python is their syntax. Java has a more verbose and structured syntax, requiring developers to write more lines of code to accomplish certain tasks. Python, with its clean and concise syntax, enables developers to express concepts in fewer lines of code, making it more readable and easier to understand.
//             Another important distinction is their performance. Java is known for its speed and efficiency, making it a popular choice for building large-scale, performance-critical applications. Python, while generally slower than Java, offers excellent productivity and flexibility. It excels in areas such as web development, scripting, and data analysis, where performance is not the primary concern. 
//           Java's strong type system makes it less prone to runtime errors, as type checking is performed during compilation. This leads to more robust and reliable code. Python, being dynamically-typed, allows for more flexibility but can result in type-related errors at runtime. However, Python's extensive testing and debugging tools help mitigate these issues.Java and Python are two popular programming languages that have gained significant traction in the software development industry. While both languages serve different purposes and have their own strengths and weaknesses, they have become go-to choices for developers worldwide. In this comparison, we will explore the key differences and similarities between Java and Python.
//           Java, developed by Sun Microsystems in the mid-1990s, is a statically-typed, object-oriented programming language. It is known for its robustness, scalability, and platform independence. Java applications run on the Java Virtual Machine (JVM), which allows them to be executed on any platform that supports Java.
//           Python, on the other hand, is a dynamically-typed, high-level programming language that emphasizes simplicity and readability. It was created by Guido van Rossum in the late 1980s and has gained popularity due to its ease of use and extensive standard library. Python's interpreted nature allows for rapid development and prototyping.
//           One of the key differences between Java and Python is their syntax. Java has a more verbose and structured syntax, requiring developers to write more lines of code to accomplish certain tasks. Python, with its clean and concise syntax, enables developers to express concepts in fewer lines of code, making it more readable and easier to understand.
//           Another important distinction is their performance. Java is known for its speed and efficiency, making it a popular choice for building large-scale, performance-critical applications. Python, while generally slower than Java, offers excellent productivity and flexibility. It excels in areas such as web development, scripting, and data analysis, where performance is not the primary concern. 
//         Java's strong type system makes it less prone to runtime errors, as type checking is performed during compilation. This leads to more robust and reliable code. Python, being dynamically-typed, allows for more flexibility but can result in type-related errors at runtime. However, Python's extensive testing and debugging tools help mitigate these issues."
//         ],
//         2 => [
//             'postID' => 2,
//             'DateCreated' => '05/24/2023',
//             'Title' => "Implications of ChatGPT",
//             'Author' => 'Shangwe',
//             'Body' => "The development of ChatGPT, a language model based on OpenAI's GPT-3.5 architecture, has had significant implications across various domains. This advanced natural language processing (NLP) model has revolutionized human-computer interactions, content generation, customer service, and educational applications. However, it also raises concerns regarding ethics, privacy, misinformation, and bias. In this essay, we will explore the implications of ChatGPT in these areas.
//             One of the major implications of ChatGPT is its ability to enhance human-computer interactions. Chatbots powered by ChatGPT can provide more natural and conversational experiences, improving customer service, virtual assistants, and automated support systems. They can understand user queries, provide relevant information, and even simulate human-like conversations. This advancement has the potential to transform the way we interact with technology and automate various tasks, increasing efficiency and productivity.
//             Additionally, ChatGPT enables content generation at an unprecedented scale. It can assist with writing tasks, generating code, composing music, and even creating artwork. Content creators and professionals in various industries can leverage this technology to streamline their work and explore new creative possibilities. However, it also raises questions about the authenticity and originality of the generated content. Ensuring proper attribution and avoiding plagiarism become important considerations when utilizing ChatGPT for content creation.
//             Education is another field significantly impacted by ChatGPT. The model can act as a virtual tutor, providing personalized learning experiences to students. It can answer questions, explain complex concepts, and offer interactive lessons. This opens up new avenues for remote learning, allowing students to access educational resources anytime, anywhere. However, it is crucial to strike a balance between automated assistance and the importance of human interaction in education.
//             Despite the numerous benefits, ChatGPT also presents ethical concerns. The technology can be misused for generating fake news, spreading misinformation, or engaging in malicious activities. It is essential to implement measures to verify the authenticity of information generated by ChatGPT and ensure responsible use. Encouraging media literacy and critical thinking skills becomes increasingly important in a world where AI-powered models can produce convincing content.
//             Another challenge is the potential for bias in ChatGPT's responses. The model is trained on vast amounts of data from the internet, which can reflect societal biases and prejudices. This can lead to biased or unfair outputs, reinforcing existing stereotypes or discriminatory views. Efforts must be made to mitigate bias and promote fairness and inclusivity in the training data and model development process. Regular evaluation, transparency, and diverse input sources are crucial for minimizing bias in AI systems like ChatGPT.
//             Privacy is yet another consideration when it comes to ChatGPT. Interactions with the model can involve sharing personal information or sensitive data. Safeguarding user privacy and ensuring data protection are of utmost importance. Clear guidelines and regulations must be in place to govern the collection, storage, and usage of user data. Users should have control over their information and be well-informed about the implications of sharing it with AI models.
//               In conclusion, ChatGPT has had significant implications in various domains, from improving human-computer interactions to enhancing content generation and revolutionizing education. However, it also raises concerns regarding ethics, privacy, bias, and misinformation. It is crucial to address these challenges through responsible development, robust evaluation, transparency, and the establishment of ethical guidelines. By doing so, we can harness the potential of ChatGPT while ensuring its positive impact on society.
//             "
//         ],
//         3 => [
//             'postID' => 3,
//             'DateCreated' => '05/24/2023',
//             'Title' => "macOS Ventura Deep Dive: Is it Worth It?",
//             'Author' => 'Shangwe',
//             'Body' => " macOS Ventura, the latest operating system release from Apple, brings a host of new features and enhancements to Mac users. With its sleek design, improved performance, and refined user experience, macOS Ventura aims to provide a seamless computing experience. In this deep dive, we will explore the key aspects of macOS Ventura and evaluate whether it is worth upgrading from previous versions.
//             One of the standout features of macOS Ventura is its redesigned interface. The new design language adopts a clean and modern look, with a focus on simplicity and clarity. The menu bar and dock have been revamped, featuring translucent effects and vibrant icons that give the system a fresh and visually appealing feel. Additionally, the Control Center, inspired by iOS, brings quick access to system settings and toggles, making it more convenient to manage various aspects of the Mac.
//             Under the hood, macOS Ventura introduces performance improvements aimed at enhancing overall system responsiveness. The new operating system takes advantage of Apple's custom silicon, including the M1 chip, to deliver faster app launches, snappier animations, and smoother multitasking. This boost in performance can significantly enhance productivity and efficiency for users, especially those who engage in resource-intensive tasks such as video editing, software development, or graphic design.
//             Another notable addition is Focus mode, which allows users to minimize distractions and concentrate on specific tasks or activities. By enabling Focus mode, notifications and alerts can be silenced or filtered based on user-defined preferences. This feature proves particularly useful during work or study sessions, as it helps maintain focus and minimize interruptions.
//             macOS Ventura also brings improvements to the Safari web browser, including enhanced privacy features and a new tab grouping system. Users can now benefit from Mail Privacy Protection, which hides their IP addresses and prevents senders from tracking email opens. The new tab grouping feature in Safari enables users to organize and manage multiple tabs more efficiently, improving overall browsing experience and productivity.
//             Furthermore, macOS Ventura expands the capabilities of FaceTime, Apple's video calling app. With the introduction of SharePlay, users can watch movies, listen to music, or share their screen with others during FaceTime calls. This feature facilitates virtual gatherings and collaborative activities, making FaceTime a more versatile communication tool.
//             Despite these exciting additions, there are factors to consider before deciding to upgrade to macOS Ventura. One important consideration is compatibility. Not all Mac models are capable of running the latest operating system, as it requires specific hardware requirements, such as Apple's M1 chip. Users with older Macs may need to verify their device's compatibility before proceeding with the upgrade.
//             Additionally, some users may prefer the familiarity and stability of previous macOS versions. Upgrading to a new operating system can involve a learning curve, and certain workflows or applications may require adjustments or updates to work smoothly. It is advisable to assess the compatibility of essential software and peripherals before making the switch.
//             Furthermore, early releases of operating systems often come with minor bugs or compatibility issues that can affect user experience. It may be prudent to wait for subsequent updates and bug fixes to ensure a more stable and reliable system. Users who rely heavily on their Macs for critical work or sensitive tasks may prefer to wait until any initial issues have been addressed before upgrading.
//             Ultimately, whether macOS Ventura is worth it depends on individual preferences, needs, and the compatibility of the Mac hardware. Users who value the latest features, improved performance, and a fresh design language will likely find the upgrade beneficial. However, those who prioritize stability, compatibility with legacy software, or have older Mac models may choose to stick with their current macOS version for the time being.     
//             In conclusion, macOS Ventura brings a range of exciting features, enhanced performance, and a refreshed design to Mac users. The new operating system offers improved productivity, convenience, and a more immersive user experience. However, compatibility considerations, potential early-release issues, and personal preferences
//             "
//         ],
    
    
//     ];

//     return $Posts;
// }

// function getPost($PostId) {
//     $AllPosts = getAllPosts();

//     return $AllPosts[$PostId];   //returns specific post
// }

//calls getAllposts selects all posts from the query
function getAllPosts() {
    $posts = dbQuery ( "
        Select *
        FROM post
        ORDER BY datePublished DESC  
        ")->fetchAll(); // array of arrays (2d Array)

    return $posts;
}

//calls All posts and gets the correct one

function getPost($postId) {
    $post = dbQuery ( "
        SELECT * 
        FROM `post` 
        WHERE `postId` = $postId
    ")->fetch();  // individual array (1d Array)
    return $post;
}

//returns an individual array containing everything