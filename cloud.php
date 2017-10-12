<?php
	//include 'server/db_conn.php';
  	require_once('functions.php');

	echo pageIni("Cloud Computing - TipTop Music");
	echo nav();
?>
	<main>
		<section id="cover" style="background-image: url('img/pexels-photo-325229.jpeg');">
			<div>
				<h1>Why Use Cloud Computing?</h1>
				<p class="author">Hayo Friese - <span>March 1st, 2017</span></p>
			</diV>
			<a href="#quick">Read Feature</a>
		</section>
		<section id="article">
			<div id="quick">
				<ul>
					<li id="quick-home"><a class="open" href="#quick">Home Page</a></li>
					<li id="quick-intro"><a href="#quick">Introduction</a></li>
					<li id="quick-cloud"><a href="#quick">Cloud Computing</a></li>
					<li id="quick-draw"><a href="#quick">Drawbacks</a></li>
					<li id="quick-req"><a href="#quick">Requirements for the Site</a></li>
					<li id="quick-comp"><a href="#quick">Comparison of Competitors</a></li>
					<li id="quick-eval"><a href="#quick">Evaluation &amp; Conclusion</a></li>
					<li id="quick-res"><a href="#quick">Resources</a></li>
				</ul>
			</div>
			<div id="essay">
				<article id="home">
					<h1>Cloud Computing &amp; Web APIs - Part A</h1>
					<p>Cloud System Solution</p>
					<p>Hayo Friese</p>
					<p>W13020720</p>
					<p>6/3/2017</p>
					<p>Kay Rogage - Jeremy Ellman</p>
					<p>CM0677</p>
					<p>Word Count - 1982</p>
					<h4><span><a id="next" href="#quick">Begin</a></span></h4>
				</article>
				<article id="introduction">
					<h1>Introduction</h1>
					<p>
						Tip Top Music is planning to build a website that will allow users access to information regarding a band and regarding information on social media. The website aims to function as a social networking platform so users can access information regarding their favourite bands, follow communities, and garner insight into the location of operations. This causes a few extra demands to be considered when developing the website.
					</p>
					<p>
						The first issue is regarding social networking. To provide information regarding bands, there are two ways of going about it. One of the ways is to directly input this information into the website, which is a lot of work, and over time will cause a lot of storage space to fill up rapidly. Another issue with this manner is that it won&apos;t be directly up to date news. Ideally, for reliance, it is optimal to be an accurate source of information. According to John Wieber from Socialnomics.net, not having up to date data can be detrimental for future development of a company with regards to sales, marketing, and development. Falling behind on data will cause customers to migrate to alternative platforms that provide accurate data (Wieber 2015). Another issue is with security, where data, either from users or from posts, are going to have to be secured in house. The other and more efficient way to go about this is via cloud computing, which is essentially the &ldquo;delivery of hosted services on the internet&rdquo; (Rouse 2016).
					</p>
					<h4><span><a id="previous" href="#quick">Previous</a> | <a id="next" href="#quick">Next</a></span></h4>
				</article>
				<article id="computing">
					<h1>Cloud Computing</h1>
					<p>
						According to IBM, cloud computing enables the delivery of on-demand resources, such as data, over the web in a virtual environment, enabling the access of information stored on the cloud systems anywhere (IBM 2016). According to the Australian Web Industry Association (AWIA), cloud computing has five essential characteristics: on-demand self-service, broad network access, resource pooling, rapid elasticity or expansion, and measured service (Hollier 2014).
					</p>
					<p>
						On-demand self-service refers to off-site accessibility, which enabled users to access their files, data, and other information stored in the cloud servers when the user needs them, provided there is internet access available, which tackles the broad network access characteristic (Hollier 2014). Alongside this, physical resources are unnecessary provided the users have a system available to access the network, such as a computer or smartphone, as all the resources are pooled into one location, which is responsible for maintaining and operating the services they provide (StateTech 2014).
					</p>
					<p>
						The idea of rapid expansion revolves around the ease of adapting to changing requirements on the server, such as when more data space is needed or file sizes are starting to mount. According to StateTech, flexibility to changing circumstances is what IaaS and SaaS strives with, especially with the help of the pay-as-you-go model (StateTech 2014). The ease in which a user can adapt to circumstances with the use of third-party services saves money, time, and resources (Cáreces 2010). 
					</p>
					<p>
						According to StateTech staff, the pay-as-you-go model, the common provision of measured service to users, allows a customer to only pay for the necessary tools, capacities, and features that they need at the time, and with the service being provided by a third-party organization responsible for them, they don&apos;t spend additional funds on uptime, hardware, and software (StateTech 2014). 
					</p>
					<p>
						Additionally, according to Azure, AWS, and SmartCloud&apos;s pricing system, they charge subscription fees monthly, which aids in conforming to changing circumstances in a work environment. Should a company not need server space, the company can discontinue their contract.
					</p>
					<p>
						Based off these characteristics, there are three main service models, as advertised by IBM: Software as a Service (SaaS), Platform as a Service (PaaS), Infrastructure as a Service (IaaS) (IBM 2016). With these services, there are four deployment models available within a cloud service: Private, Shared, Public, and Hybrid.
					</p>
					<p>
						Per IBM&apos;s definitions, SaaS are software that run on different computers and on different servers, which are owned, operated, and maintained by others. Essentially, it&apos;s a third-party provider of software via the internet (Rouse 2016). IaaS is an infrastructure plan that provides customers with their own servers, network, storage, and data center (IBM 2016). Essentially, a third-party corporation offers users space in a server on the cloud where they can store whatever services they need, and manage the bandwidth of incoming data. Some examples of this are Amazon&apos;s AWS, Windows Azure, and IBM&apos;s SmartCloud Enterprise, among many others. 
					</p>
					<p>
						The four different deployment models are relatively similar in structure, with the main differences being around security provisions available to each. For Private Clouds, the cloud is protected by a firewall accessible only via IT services inside the corporations of the client, denying anyone but the company itself the ability to make use of the server. The Shared, or Community Cloud, is a set up that is mutually shared by similar types of organizations like banks or trading firms, and each client hosted on the cloud has the same type of structure (VictorVictories 2015). The Public Cloud is a service provided to any user with the ability for them to pay for the services they need or want (Rouse 2009). A Hybrid Cloud is a combination of all the models, with the customer being able to pay for their desired services and provided with the additional models (VictorVictories 2015). According to Kevin Jackson, this system allows for users to profit off of economies of scale the models provide (Jackson 2011).
					</p>
					<h4><span><a id="previous" href="#quick">Previous</a> | <a id="next" href="#quick">Next</a></span></h4>
				</article>
				<article id="drawbacks">
					<h1>Drawbacks</h1>
					<p>
						One of the largest issues surrounding cloud computing is the fact that the service revolves around depending on a third-party organization. Trusting this third-party to look after your data could mean that the data can be provided to other users, with causes an issue with data protection and privacy (Hollier 2014). Issues such as downtime or security leaks can also spark massive outrages. Although the third-party organizations are oriented around maintaining these services, due to its shared nature outbreaks are inevitable, as are random service outages. Although methods are being undertaken to minimize the risks, companies still need to prepare for system outages or service downtime, as well as the fear of losing data, or data becoming publicly accessible (Seshachala 2015). Moreover, there is a lack of flexibility involved with running applications from a cloud server as opposed to on a user&apos;s desktop, causing slower runtime of applications. Adobe tackles this by making their software available for download on their cloud storage server provided a user has a paid subscription (Haines 2016).
					</p>
					<p>
						An example of a severe case of intrusion comes from Code Spaces, who completely lost all their files due to a breach in the Amazon EC2 Console. Code Spaces, an online repository of code much like Github, had all their files deleted by an individual who managed to gain access to their EC2 repository, which effectively caused the collapse of Code Spaces (Venezia 2014). An example of downtime was Dropbox, who in 2014 went down, which caused millions of users around the world to not have access to files stored on their server for two days (Szoldra 2014).
					</p>
					<h4><span><a id="previous" href="#quick">Previous</a> | <a id="next" href="#quick">Next</a></span></h4>
				</article>
				<article id="requirements">
					<h1>Requirements For The Site</h1>
					<p>
						Per the above information, it&apos;s important to consider some commonalities between services, what they offer and where their data is stored. Essentially, TipTop Music is a community source of information regarding bands, gigs, and music, which means data needs to be stored dynamically in real time to provide readers with the most accurate information.
					</p>
					<p>
						According to The Guardian, hosting their data on the cloud service has been immensely helpful for uploading data on the go in real time, finding it easier to upload content to global readers on-demand and on-completion (The Guardian 2016). Time Inc., a media agency that owns magazine brands like Time and Sports Illustrated, also states that it is easier for them to host their software, website, and e-magazines online to provide users globally with the same results, but also benefits their company&apos;s level of productivity, allowing them to focus more on the company&apos;s needs than the system&apos;s needs (Time Inc. 2016). Some other notable agencies that dynamically provide content to users globally by hosting it on cloud services include Pinterest, Netflix, The Weather Company, and Geo.me, all capable of providing users with the data they request on-demand (Amazon Web Services, 2016).
					</p>
					<p>
						The data readers will demand from TipTop Music includes gig dates, trending topics surrounding their artists, access to their artists&apos; music, and articles. Some of the data will be incoming from outsourced material, so an elastic network needs to be able to handle this type of service. Additionally, as the data is ever expanding, the platform the data is hosted on needs to allow for mass expansion over time should the volume of data expand beyond domestic hosting server levels. Additional data such as the user base, tracking user behaviour on the platform, and growing the platform to satisfy the community needs must be considered. This is most optimal to host on a public cloud, to minimize the cost, and the data needs to be available to any visiting user.
					</p>
					<h4><span><a id="previous" href="#quick">Previous</a> | <a id="next" href="#quick">Next</a></span></h4>
				</article>
				<article id="competitors">
					<h1>Comparison of Competitors</h1>
					<p>
						The most important question for any user looking to use a cloud server, after answering the &ldquo;why&rdquo;, which one? Alongside discussing which competitor is the best, it is more important to consider the user&apos;s needs, and why they would want to pay for certain cloud service features. According to Clutch, the top 5 hosting services are Amazon Web Services (AWS), Microsoft&apos;s Azure, Google Cloud Platform, IBM Cloud, and Rackspace (Clutch 2017).
					</p>
					<p>
						As stated earlier, AWS hosts a number of successful web businesses, and, referring to Pinterest&apos;s case study, was a great platform to begin a community-oriented service (Pinterest, 2016). According to Clutch&apos;s leaders matrix, AWS has the highest feature satisfaction rating, with their service rating of 9.5/10 being their lowest rating. Their delivery rating is also 18.6, the second highest of all the cloud services (Clutch 2017). In comparison, Rackspace dominates their delivery rating with 18.9. The issue with Rackspace&apos;s services is that it doesn&apos;t allow for users to enjoy a free trial to see if it is a service that fits their needs, whereas the other four do (Clutch 2017). Azure and Google both spot a high delivery rating, although Azure&apos;s rating for their features is the closest competitor to AWS. This shows that ease of service is definitely in the favour of AWS.
					</p>
					<p>
						With regards to reliability, AWS has recently come under fire. According to Ron Miller from Techcrunch, Amazon&apos;s AWS servers in Northern Virginia went down for 3 hours on the 28th of February (Miller 2017). Azure has also had an outing, which lasted for a good 5 hours on the 19th of February (Cloud Harmony, 2017).
					</p>
					<h4><span><a id="previous" href="#quick">Previous</a> | <a id="next" href="#quick">Next</a></span></h4>
				</article>
				<article id="evaluations">
					<h1>Evaluation &amp; Conclusions</h1>
					<p>
						Cloud computing is a powerful technology, allowing for data to be stored and services to be provided to millions of users at an expansive and on-demand rate. Many experts in the field, according to AWS&apos; Youtube playlist of case studies, claim that cloud computing is the future to web development.
					</p>
					<p>
						Despite this, cloud computing has its risks. Trusting on a third party to host your services and keep it secure and online is a scary sensation. However, it allows the company or user to focus on what really matters: the content.
					</p>
					<p>
						TipTop Music aims to provide the community with up-to-date information whenever they want or need it. In order to do this cheaply, AWS provides the most free tools with relatively low cost, including a year-long free trial for up to 750 hours a month for running an instance, meaning one instance running for free all year. Alongside that, any necessary tools can be purchased on demand, and will provide Jim Jones with the ideal environment to host his community and store the data, with a lower average cost than the top 5 competitors. Additionally, the user has access to a range of support services, allowing the experience to be easy throughout the journey.
					</p>
					<h4><span><a id="previous" href="#quick">Previous</a> | <a id="next" href="#quick">Next</a></span></h4>
				</article>
				<article id="resources">
					<h1>Resources</h1>
					<ul>
						<li>
							Wieber, John (2015) The Importance of Keeping Your Data Up to Date. Available at <a href="http://socialnomics.net/2015/06/16/the-importance-of-keeping-your-data-up-to-date/">http://socialnomics.net/2015/06/16/the-importance-of-keeping-your-data-up-to-date/</a> (Accessed 26/2/2017).
						</li>
						<li>
							Rouse, Margaret (2016) cloud computing. Available at <a href="http://searchcloudcomputing.techtarget.com/definition/cloud-computing">http://searchcloudcomputing.techtarget.com/definition/cloud-computing</a> (Accessed 26/2/2017).
						</li>
						<li>
							Rouse, Margaret (2016) Infrastructure as a Service (IaaS). Available at <a href="http://searchcloudcomputing.techtarget.com/definition/Infrastructure-as-a-Service-IaaS">http://searchcloudcomputing.techtarget.com/definition/Infrastructure-as-a-Service-IaaS</a> (Accessed 26/2/2017).
						</li>
						<li>
							Rouse, Margaret (2016) public cloud. Available at <a href="http://searchcloudcomputing.techtarget.com/definition/public-cloud">http://searchcloudcomputing.techtarget.com/definition/public-cloud</a> (Accessed 26/2/2017).
						</li>
						<li>
							IBM (2017) What is cloud computing?. Available at <a href="https://www.ibm.com/cloud-computing/learn-more/what-is-cloud-computing/">https://www.ibm.com/cloud-computing/learn-more/what-is-cloud-computing/</a> (Accessed 26/2/2017).
						</li>
						<li>
							StateTech Staff (2014) 5 Important Benefits of Infrastructure as a Service. Available at <a href="http://www.statetechmagazine.com/article/2014/03/5-important-benefits-infrastructure-service">http://www.statetechmagazine.com/article/2014/03/5-important-benefits-infrastructure-service</a> (Accessed 26/2/2017).
						</li>
						<li>
							Sullivan, Dan (2014) IaaS Providers List: Comparison and Guide. Available at <a href="http://www.tomsitpro.com/articles/iaas-providers,1-1560.html">http://www.tomsitpro.com/articles/iaas-providers,1-1560.html</a> (Accessed 26/2/2017).
						</li>
						<li>
							Cáreces, Juan (2010) Service Scalability Over The Cloud. Available at <a href="https://link.springer.com/chapter/10.1007/978-1-4419-6524-0_15">https://link.springer.com/chapter/10.1007/978-1-4419-6524-0_15</a> (Accessed 26/2/2017).
						</li>
						<li>
							Seshachala, Sudhi (2015) Disadvantages of Cloud Computing. Available at <a href="http://cloudacademy.com/blog/disadvantages-of-cloud-computing/">
					http://cloudacademy.com/blog/disadvantages-of-cloud-computing/</a> (Accessed 26/2/2017).
						</li>
						<li>
							Venezia, Paul (2014) Murder in the Amazon Cloud. Available at <a href="http://www.infoworld.com/article/2608076/data-center/murder-in-the-amazon-cloud.html">http://www.infoworld.com/article/2608076/data-center/murder-in-the-amazon-cloud.html</a> (Accessed 26/2/2017).
						</li>
						<li>
							Szoldra, Paul (2014) Dropbox Briefly Goes Down [Update: It&apos;s Back]. Available at <a href="http://www.businessinsider.com/dropbox-outage-2014-1?IR=T">http://www.businessinsider.com/dropbox-outage-2014-1?IR=T</a> (Accessed 26/2/2017).
						</li>
						<li>
							VictorVictories (2015) 4 Types of Cloud Computing Deployment Model You Need To Know. Available at <a href="https://www.ibm.com/developerworks/community/blogs/722f6200-f4ca-4eb3-9d64-8d2b58b2d4e8/entry/4_Types_of_Cloud_Computing_Deployment_Model_You_Need_to_Know1?lang=en">https://www.ibm.com/developerworks/community/blogs/722f6200-f4ca-4eb3-9d64-8d2b58b2d4e8/entry/4_Types_of_Cloud_Computing_Deployment_Model_You_Need_to_Know1?lang=en</a> (Accessed 26/2/2017).
						</li>
						<li>
							Hollier, Scott (2014) ‘The Accessibility of Cloud Computing – Current and Future Trends&apos;, Media Access Australia, Sydney Pages 6-16. Available at <a href="https://mediaaccess.org.au/research-policy/white-papers/the-accessibility-of-cloud-computing-%E2%80%93-current-and-future-trends">https://mediaaccess.org.au/research-policy/white-papers/the-accessibility-of-cloud-computing-%E2%80%93-current-and-future-trends</a> (Accessed 26/2/2017).
						</li>
						<li>
							Jackson, Kevin L. (2011) The Economic Benefit of Cloud Computing. Available at <a href="https://www.forbes.com/sites/kevinjackson/2011/09/17/the-economic-benefit-of-cloud-computing/#6a09cc3d225c">https://www.forbes.com/sites/kevinjackson/2011/09/17/the-economic-benefit-of-cloud-computing/#6a09cc3d225c</a> (Accessed 26/2/2017).
						</li>
						<li>
							Haines, Bryan (2016) What is the Adobe Creative Cloud? Should You Subscribe?. Available at <a href="https://www.thebalance.com/what-is-the-adobe-creative-cloud-should-you-subscribe-2531651">https://www.thebalance.com/what-is-the-adobe-creative-cloud-should-you-subscribe-2531651</a> (Accessed 26/2/2017). 
						</li>
						<li>
							Amazon Web Services (2016) Time Inc. Evolves with Confidence Using AWS Support. Available at <a href="https://www.youtube.com/watch?v=bd39_MK8Sds&list=PLFC4DF7286B2419F9&index=67">https://www.youtube.com/watch?v=bd39_MK8Sds&amp;list=PLFC4DF7286B2419F9&amp;index=67</a> (Accessed 28/2/2017).
						</li>
						<li>
							Amazon Web Services (2016) Guardian News Massively Accelerates Digital Feature Releases Using AWS. Available at <a href="https://www.youtube.com/watch?v=p9l7YD-N9FI&list=PLFC4DF7286B2419F9&index=62">https://www.youtube.com/watch?v=p9l7YD-N9FI&amp;list=PLFC4DF7286B2419F9&amp;index=62</a> (Accessed 28/2/2017).
						</li>
						<li>
							Miller, Ron (2017) The Day Amazon S3 Storage Stood Still. Available at: <a href="https://techcrunch.com/2017/03/01/the-day-amazon-s3-storage-stood-still/">https://techcrunch.com/2017/03/01/the-day-amazon-s3-storage-stood-still/</a> (Accessed 1/3/2017).
						</li>
						<li>
							Etherington, Daniel (2017) Amazon AWS S3 outage is breaking things for a lot of websites and apps. Available at <a href="https://techcrunch.com/2017/02/28/amazon-aws-s3-outage-is-breaking-things-for-a-lot-of-websites-and-apps/">https://techcrunch.com/2017/02/28/amazon-aws-s3-outage-is-breaking-things-for-a-lot-of-websites-and-apps/</a> (Accessed 28/2/2017).
						</li>
						<li>
							Amazon Web Services (2016) AWS Customer Success Stories. Available at: <a href="https://www.youtube.com/playlist?list=PLFC4DF7286B2419F9">https://www.youtube.com/playlist?list=PLFC4DF7286B2419F9</a> (Accessed 28/2/2017).
						</li>
						<li>
							Amazon Web Services (2017) Web &amp; Mobile Apps. Available at <a href="https://aws.amazon.com/web-mobile-social/">https://aws.amazon.com/web-mobile-social/</a> (Accessed 28/2/2017).
						</li>
						<li>
							Cloud Harmony (2017) Service Status. Available at <a href="https://cloudharmony.com/status-of-storage">https://cloudharmony.com/status-of-storage</a> (Accessed 1/3/2017).
						</li>
						<li>
							Clutch (2017) Best Cloud Service Providers. Available at <a href="https://clutch.co/cloud#leaders-matrix">https://clutch.co/cloud#leaders-matrix</a> (Accessed 1/3/2017).
						</li>
					</ul>
					<h4><span><a id="previous" href="#quick">Previous</a></span></h4>
				</article>
			</div>
		</section>
	</main>
<?php
	echo footer();
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="server/js/index.js"></script>
	<script src="server/js/cloud.js"></script>
<?php
	echo pageEnd();
?>