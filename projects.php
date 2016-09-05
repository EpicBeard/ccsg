<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- SEO  -->
    <meta name="Description" content="">
    <meta name="Keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="http://scotch.io/favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/corgroup.css">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        jQuery(function($){

            var $allProjects = $("#projects li > div");

            $("#projects h3").click(function(){
                $allProjects.slideUp();
                $(this).next("div").stop().slideToggle();
            });

        });
    </script>

</head>
<body>
<?php include 'nav-bar.php'; ?>

<div class="container">
    <div class="project-banner">
        <img id="project-image" src="img/projects.jpg">
    </div>
    <div class="project-title">
        <h1 class="robot" id="project-h1">Projects</h1>
    </div>

    <div class="project-info">
        <p class="robot-p-project">
            Our list of projects is quite extensive. You can find a condensed list of Expert Witness Cases and Publications
            we've compiled on this page.
        </p><br>
        <p class="robot-p-project">
            Simply select on Publications or Expert Witness Cases and you will be directed to their respective location
            on this page. Once there, select the title and it will expand revealing its information.
        </p>
    </div>
    </div>

    <div class="project-buttons">
        <a href="#projects-list"><button id="project-button">Projects</button></a>
        <a href="#expert-witness"><button id="expert">Expert Witness Cases</button></a>
        <a href="#publication-list"><button id="publications">Publications</button></a>
    </div>

<a name="projects-list"></a>

<div class="container">
    <div class="project-list">
        <h2 class="robot" id="project-h2">Projects</h2>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <ul id="projects">
        <li>
            <h3>Buena Vista Correctional Facility (BVCF)</h3>

            <div><p class="robot-p-list">Developed and implemented a system for monitoring/testing staff
                performance at security posts at BVCF – 1989. Implemented same system
                at CSP in 1997. Wrote and provided policy recommendations approved
                by the Executive Director for statewide application of the system in
                Executive level policy in 2003.</p></div>
            <div><p class="robot-p-list">Developed and implemented the "Emergency Mobilization" policy at
                BVCF to address immediate needs at the outset of a facility
                emergency, including the activation of our emergency responder
                system and management of all staff/inmates - 1988/89. Special
                commendation received.</p></div>
        </li>

        <li>
            <h3>Colorado Department of Corrections</h3>

            <div><p class="robot-p-list">Wrote policy and coordinated policy review and recommendations
                for CDOC Policy on Use of Force. Also participated in the related
                change in curriculum for UOF training across the Department.
                Changes in policy were many, including removal of the “use of force
                continuum” and replacement with the “use of force wheel” which
                generally depicts the relationship between options of force available
                and the types of risks an employee may face. The policy was
                approved by the Executive Director in 2001.</p></div>
            <div><p class="robot-p-list">Wrote policy changes for CDOC Policy on Unlawful
                Discrimination. Responsible for change which caused the
                definition of “sexual discrimination” to be more restrictive by
                removing the words “unwanted or unwelcome”. The immediate effect
                of the change was to make all sexual conduct at the work sight
                prohibited by CDOC policy. The policy was approved by the
                Executive Director in 2004. Prior to the change, conducted a test
                application of this policy at Colorado State Penitentiary for
                five years. Results indicated nearly one hundred per cent reduction
                in disciplinary and formal corrective actions against staff for
                sexual misconduct.</p></div>
            <div><p class="robot-p-list">Writer, creator, editor of the Colorado Department of
                Corrections “Safe Program” plan. It is a plan which calls for
                the organization of Executive and administrative services in a
                manner which generates greater definition, training,
                commitment, and accountability of all Department of Corrections
                staff to the concept of working for safety across division
                lines throughout the Department. Final review by Executive
                Director completed, editing and final form to be presented for
                signature and initiation of program, September, 2004.</p></div>
        </li>

        <li>
            <h3>Colorado State Penitentiary(CSP)</h3>

            <div><p class="robot-p-list">Colorado State Penitentiary(CSP), 1990-1993, Leadership
                role in design development, construction monitoring, and
                transition to operation.</p></div>
        </li>

        <li>
            <h3>San Carlos Correctional Facility (SCCF)</h3>

            <div><p class="robot-p-list">San Carlos Correctional Facility (SCCF), 1991-1992,
                Colorado Department of Corrections, leadership in design
                development with emphasis on security program aspects.</p></div>
        </li>

        <li>
            <h3>Sterling Correctional Facility (SCF)</h3>

            <div><p class="robot-p-list">Sterling Correctional Facility (SCF), 1996-1999, Colorado
                Department of Corrections, leadership in design development with
                emphasis on security program aspects. The first “Mega” facility for
                Colorado.</p></div>
        </li>

        <li>
            <h3>Survey on Use of Force - American Correctional Association</h3>

            <div><p class="robot-p-list">Survey on Use of Force, November 1997, provided critical
                assessment in constructing a survey to be conducted by the American
                Correctional Association on use of force in US and Canadian Prisons.
                Worked with Mr. Craig Hemmens, faculty member, at Boise State
                University, Boise Idaho to finalize the instrument.</p></div>
        </li>

        <li>
            <h3>Request for Proposal - Staffing Analysis</h3>

            <div><p class="robot-p-list">Request for Proposal - Staffing Analysis, January 1998, in
                response to a request from the Utah Department of
                Corrections/National Institute of Corrections, provided a critique
                of a request for proposal (RFP) for the Utah State Legislators.
                The intent was to request the RFP be funded, and for it provide the
                direction for consultants to provide staffing analysis to the Utah
                Department of Corrections.</p></div>
        </li>

        <li>
            <h3>Program Development - Managing Violent and High Risk Offenders</h3>

            <div><p class="robot-p-list">Program Development - Managing Violent and High Risk Offenders,
                January, 2000 and June, 2003, as a consultant for the NIC, participated
                in the planning session in Washington, D.C., to create a curriculum to
                teach strategies for managing violent and hard to manage inmates for the
                delivery to NIC students.</p></div>
        </li>

        <li>
            <h3>Consultant/Technical Assistance</h3>

            <div><p class="robot-p-list">Consultant/Technical Assistance, National Institute of Corrections,
                Texas Department Of Criminal Justice (TDCJ), provided systems review of
                the Department and specific facilities (eight high security facilities
                over 12 months) with respect to use of force staff performance and
                management systems. Beginning December, 2002, concluded in 2004 with
                audits of four high security correctional institutions with formal
                reports to the Executive Director.</p></div>
        </li>

        <li>
            <h3>Presenter, January, 2004, ACA Conference</h3>

            <div><p class="robot-p-list">Presenter, January, 2004, ACA Conference, New Orleans,
                presented workshop strategies for managing inmates in “Supermax” environment.</p></div>
        </li>

        <li>
            <h3>Consultant/Technical Assistance</h3>

            <div><p class="robot-p-list">Consultant/Technical Assistance, National Institute of
                Corrections, Massachusetts Department of Corrections(MDOC),
                provided systems review of the Department and specific
                facilities (MCI Cedar Junction, MCI Bridgewater State
                Hospital, MDOC Training Academy, and Souza-Baronowski
                Correctional Center) with respect to use of force staff
                performance and management systems. May, 2005.</p></div>
        </li>

        <li>
            <h3>Special Commendation from Human Rights Watch</h3>

            <div><p class="robot-p-list">Special Commendation from Human Rights Watch,
                Jamie Fellner, U.S. Program, for support and advice
                in opposition to the use of attack dogs for Cell
                Extractions in U.S. Prisons, October, 2006, and for
                “guidance you have provided to help us understand the
                proper boundaries for use of force in prisons.”</div>
        </li>

        <li>
            <h3>National Law Enforcement and Correctional Technology Center</h3>

            <div><p class="robot-p-list">National Institute of Justice – National Law
                Enforcement and Correctional Technology Center –
                Rocky Mountain Region. May of 2007, signed a 5 five
                month contract to act as the Program Manager for the
                Rocky Mountain Region (ten states) related to all prisons
                and counties. Currently under contract for 2008/2009.</p></div>
        </li>

        <li>
            <h3>National Institute of Corrections</h3>

            <div><p class="robot-p-list">National Institute of Corrections – Technical Assistance
                Project. Consultant for staffing analysis related to several
                prisons in the Carson City, Nevada area. Consultant provided
                written and verbal observations on eight versus twelve hour
                shifts for state correctional institutions in the Nevada Department
                of Corrections, August 2008.</p></div>
        </li>

        <li>
            <h3>National Institute of Corrections</h3>

            <div><p class="robot-p-list">National Institute of Corrections – Technical Assistant
                Project. August, 2010, Consultant for providing training to
                staff in the Iowa Department of Corrections on subjects such
                as project management design, program models for high
                security confinement programs, and activation strategies
                for new facilities.</p></div>
        </li>

        <li>
            <h3>Project Manager :National Institute of Justice</h3>

            <div><p class="robot-p-list">Project Manager :National Institute of Justice –
                National Law Enforcement and Corrections Technology Center
                – Corrections Center of Excellence, from September thru
                December 2010, technical assistance project for provide
                bedspace prediction software and analysis to the New
                Orleans Mayors Officer and the New Orleans Parrish Prison
                System. Completed December, 2010. Special letter of
                appreciation from the Mayor of New Orleans.</p></div>
        </li>

        <li>
            <h3>Volunteer Trainer, “Seven Habits Behind the Walls”</h3>

            <div><p class="robot-p-list">Volunteer Trainer, “Seven Habits Behind the Walls”,
                delivery of the Covey-Franklin program Severn Habits of
                Highly Effective People to inmates in the Colorado Department
                of Corrections. 2009 – ongoing, teaching one day per week
                for an eight week series.</p></div>
        </li>

            <a name="expert-witness"></a>

        <li>
            <h3>Manager/Creator</h3>

            <div><p class="robot-p-list">Manager/Creator : Leadership training project for Afghan
                correctional leaders, including World Café’ group exercises
                to develop problem solving skills related to contemporary
                Afghan corrections challenges, on behalf of General Mohammed
                Jamsheed, Director of Corrections, August, 2013.</p></div>
        </li>

        <li>
            <h3>Presenter: “Transformational Leadership in Corrections”</h3>

            <div><p class="robot-p-list">Presenter: “Transformational Leadership in Corrections”,
                August 2014, American Correctional Association Convention,
                Salt Lake City, Utah.</p></div>
        </li>
        </ul>
    </div>
</div>


    <div class="project-buttons">
        <div class="expert-list container">
            <a class="robot" id="project-h2"><h2>Expert Witness Cases</h2></a>
            <ul class="expert-white" id="projects">

                <li>
                    <h3>Reginald Gafford v. Multnomah County</h3>

                    <div><p class="robot-p-list">Expert Witness, Reginald Gafford v. Multnomah County,
                        March, 2000, provided testimony on behalf of the Multnomah County
                        Sheriff’s Department (Portland, OR) in a case involving the use of
                        force upon inmate Reginald Gafford in which the inmate died during
                        the application of force.</p></div>
                </li>

                <li>
                    <h3>Jones El v. Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, November, 2000, Jones El v. Wisconsin
                        Department of Corrections, agreed to provide expert testimony
                        on behalf of the Department in a lawsuit involving inmates claiming
                        8th Amendment issues of unconstitutional conditions of confinement
                        in the Wisconsin “Supermax” high security prison.</p></div>
                </li>

                <li>
                    <h3>John Tiggs v. Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, July, 2002, John Tiggs v. Wisconsin
                        Department of Corrections, agreed to provide testimony on
                        behalf of the Department in a lawsuit involving inmate John
                        Tiggs’s claims of violations of 8th Amendment rights related
                        to his confinement in the Wisconsin “Supermax” prison.</p></div>
                </li>

                <li>
                    <h3>Kelvin Jackson v. Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, August, 2002, Kelvin Jackson v. Wisconsin Department
                        of Corrections, agreed to provide testimony as a service to the
                        Department in a legal proceeding in which the survivors of inmate
                        Kelvin Jackson claim his death, related to an epileptic seizure,
                        may have been a violation of his constitutional rights.</p></div>
                </li>

                <li>
                    <h3>Baker/Castaneda v. Correctional Services Corporation</h3>

                    <div><p class="robot-p-list">Expert Witness, August, 2003, Baker/Castaneda v. Correctional
                        Services Corporation, Tarrant County Judicial District, plaintiffs
                        were female boot camp offenders claiming to have been sexually
                        assaulted by an employee. Submitted an affidavit. Settlement reached
                        before trial.</p></div>
                </li>

                <li>
                    <h3>Karen Hoard, et al v. Thompson Pollard, et al, Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, September, 2003, Karen Hoard, et al v. Thompson
                        Pollard, et al, Wisconsin Department of Corrections, a case in which
                        an inmate committed suicide in high security confinement and the family
                        sought relief in U.S. District Court. Acted as a jury trial expert
                        witness. The jury was unanimous in favor of the Defendant.</p></div>
                </li>

                <li>
                    <h3>Giuffre v. Malone, Dane City</h3>

                    <div><p class="robot-p-list">Expert Witness, March, 2004, Giuffre v. Malone, Dane Cty, Cir. Ct.
                        Case No. 03-CV-1914, Wisconsin Department of Corrections, a case in
                        which an inmate after parole/discharge claims his physical/medical
                        deterioration was a direct cause of the indifference of the Warden to
                        his medical needs during incarceration. Ask to review all medical/legal
                        documents and  provide an opinion to the defendants. Plaintiffs withdrew
                        all claims. Case dismissed by the Court.</p></div>
                </li>

                <li>
                    <h3>Konizter v. Bartow et al. & Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, November 2004, Konizter v. Bartow et al. & Wisconsin
                        Department of Corrections, a case in which an inmate diagnosed as having
                        Gender Identity Disorder claims a constitutional right to surgery
                        intended to change his gender from male to female. Ask to review all
                        medical/legal documents and to provide an opinion to the court. Case
                        in progress.</p></div>
                </li>

                <li>
                    <h3>Nelson v. Joseph Lehman et al, Washington Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, January 2005, Nelson v. Joseph Lehman et al,
                        Washington Department of Corrections, a case in which inmate alleges
                        he has been the subject of unlawful discrimination by the inmate
                        classification system resulting in institutional assignment based
                        upon his religious affiliation with a religion advocating the supremacy
                        of the white race. Case status unknown.</p></div>
                </li>

                <li>
                    <h3>Kusick v. Jane Gamble et al, Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, November 2004, Kusick v. Jane Gamble et al, Wisconsin
                        Department of Corrections, a case in which inmate Kusick claims the failure
                        of his hip replacement surgery is the responsibility of Wisconsin staff
                        supervising him during his recuperation from surgery. Plaintiff withdrew
                        from the proceedings with prejudice against plaintiff by the court.</p></div>
                </li>

                <li>
                    <h3>Francis Grady v. Judy Nordahl, et al, Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, March 2005, Francis Grady v. Judy Nordahl, et al,
                        Wisconsin Department of Corrections, a case in which inmate Grady claims
                        failure and inadequacies in the Wisconsin’s Department of Correction’s
                        treatment of Hepatitis C disorder. Case in progress.</p></div>
                </li>

                <li>
                    <h3>Prison Legal News v. James v. Crosby, et al. & The Florida Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, Prison Legal News v. James v. Crosby, et al. & The Florida Department
                        of Corrections, U.S. District Court, Middle District of Florida, Jacksonville Division.
                        October, 2005. It is a case in which Prisons Legal News complained that censorship of
                        its publication to inmates was not justified and amounted to a violation of First
                        Amendment rights. It was recently concluded in terms of my activity as witness in
                        deposition and at trial. Found in favor of defendant.</p></div>
                </li>

                <li>
                    <h3>James Doby v. Ronald Berry & the Florida Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, James Doby v. Ronald Berry & the Florida Department of
                        Corrections, United States District Court, Middle District, Jacksonville Division.
                        Filed October,2004. A case in which the plaintiff alleges a violation of the his
                        8th Amendment rights to be free of cruel and unusual punishment. The incident
                        was during a time he was being disruptive in confinement and officers used
                        chemical weapons to control his behavior. Plaintiff withdrew his claim.</p></div>
                </li>

                <li>
                    <h3>Gillis v. Litscher & the Wisconsin Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, Gillis v. Litscher & the Wisconsin Department of Corrections,
                        United States District Court, Eastern District of Wisconsin. Filed 10/04.
                        A case in which the plaintiff alleges that depriving him of personal property
                        to encourage security rule compliance constitutes cruel and unusual punishment
                        under the 8th Amendment to the US Constitution. Summary Judgement granted in
                        favor of the Defendant Wisconsin Department of Corrections.</p></div>
                </li>

                <li>
                    <h3>Walter Gauthier vs. Eastern Oregon Correctional Institute</h3>

                    <div><p class="robot-p-list">Expert Witness, Walter Gauthier vs. Eastern Oregon Correctional Institute,
                        United States District Court, District of Oregon. Filed in 2004. A case
                        in which plaintiff was terminated during trial service and claims unlawful
                        discrimination based upon age. Asked to act as an expert witness on behalf
                        of the Defendants. Jury trial in May of 2006 decided in favor of the plaintiff.</p></div>
                </li>

                <li>
                    <h3>Pisciotta v. Yavapai County, Arizona</h3>

                    <div><p class="robot-p-list">Expert Witness, Pisciotta v. Yavapai County, Arizona. United States
                        District Court for the District of Arizona, 2006. A case in which an
                        inmate was raped in a county jail lock-up where the Sheriff and County
                        Commissioners were indifferent to the extremely, crowded, inhumane, and
                        exceptionally violent conditions for several years leading to the assault.
                        Acting as expert witness on behalf of the plaintiffs. Case dismissed when inmate withdrew charges.</p></div>
                </li>

                <li>
                    <h3>Sean Patrick Murphy v. County of Yavapai</h3>

                    <div><p class="robot-p-list">Expert Witness, Sean Patrick Murphy v. County of Yavapai, United States
                        District Court For the District of Arizona, 2006. A case in which an inmate
                        was assaulted resulting in a broken jaw in a county jail lock-up where the
                        Sheriff and County Commissioners were indifferent to the extremely, crowded,
                        inhumane, and exceptionally violent conditions for several years leading to
                        the assault. Acting as expert witness on behalf of the plaintiffs. Case status unknown.</p></div>
                </li>

                <a name="publication-list"></a>

                <li>
                    <h3>Carrero v. Grayson Robinson</h3>

                    <div><p class="robot-p-list">Expert Witness, Carrero v. Grayson Robinson, Sheriff of Arapahoe County,
                        United States District for the District of Colorado, November, 2005. A case
                        in which an employee over 18 years claims racial discrimination and retaliation
                        in violation of various civil rights laws and the US Constitution. Agreed in
                        September of 2006 to act as an expert witness on behalf of the Sheriff. Issued
                        expert report in October. Trial is scheduled for November, 2007.</p></div>
                </li>

                <li>
                    <h3>Ashman, et al., v. Marshall, et al., Massachusetts Department of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, Ashman, et al., v. Marshall, et al., Massachusetts Department
                        of Corrections, Suffolk County Court, 2006. A case were inmates were rioting in a
                        cell block of a prison and alleged that unclean conditions that resulted were a
                        violation of their 8th Amendment right to be free of cruel and usual punishment.
                        Provided expert witness testimony on behalf of Defendants. Jury trial resulted in a
                        $1.00 fine against defendants. The remainder of the decision is in progress.</p></div>
                </li>

                <li>
                    <h3>Rice and Lytle v. Oregon Deportment of Corrections</h3>

                    <div><p class="robot-p-list">Expert Witness, Rice and Lytle v. Oregon Deportment of Corrections.
                        Marion County Court, September, 2006. A case in which two employees were
                        dismissed by the Superintendent of their facility. The employees claim the
                        Superintendent had unlawfully discriminated against them based upon their
                        race, were denied first amendment rights of free speech, and denied protection
                        under the state “Whistle Blower” law. I am providing an expert opinion on behalf
                        of the defendants. Case goes to trial in February of 2008.</p></div>
                </li>

            </ul>
        </div>
    </div>



<div class="container">
    <div class="publications-list">
        <h2><a class="robot" id="project-h2">Publications</a></h2>
        <ul id="projects">

            <li>
                <h3>The Wheel of Prison Operations: Useful Tool for Successful
                    Management of Security</h3>

                <div><p class="robot-p-list">Publication, authored “The Wheel of Prison Operations: Useful
                    Tool for Successful Management of Security”. June/July1999 issue
                    of “Correctional Security Report” a national publication on
                    correctional security operations.</p></div>
            </li>

            <li>
                <h3>Use Of Force - Current Practice and Policy</h3>

                <div><p class="robot-p-list">Book on Use of Force in Prisons, September 1998, asked to co-author a book on use of force in
                    prisons to be published by the American Correctional Association on use of force in US and
                    Canadian Prisons. Use Of Force - Current Practice and Policy Published November 1999.
                    Advertised as ACA “Bestseller” for several years.</p></div>
            </li>

            <li>
                <h3>Manual on Security Auditing and Systems Compliance</h3>

                <div><p class="robot-p-list">Manual on Security Auditing and Systems Compliance, December, 1998, asked
                    to co-author a book on security auditing and systems compliance. The book
                    is a project of the National Institute of Corrections. Requested to write a
                    chapter on auditing reporting and follow-up and act as an editor with
                    respect to the entire volume.</p></div>
            </li>

            <li>
                <h3>The Evolution and Development of Correctional Technology</h3>

                <div><p class="robot-p-list">Book on Corrections Technology, February, 2000, submitted chapter on correctional
                    architecture and technology as a contributor to a publication on corrections technology.
                    National Institute of Justice funded project. The Evolution and Development of Correctional
                    Technology was published August 1, 2000, by Seaskate, Inc., for the National Institute of Justice.</p></div>
            </li>

            <li>
                <h3>Guidelines For The Development Of A Security Program</h3>

                <div><p class="robot-p-list">“Guidelines For The Development Of A Security Program”, American Correctional Association,
                    Contributing Editor with a special commendation, April 1996 to October 1997. Book published.</p></div>
            </li>

            <li>
                <h3>Program Development - Security Audit Instrument Model Development</h3>

                <div><p class="robot-p-list">Program Development - Security Audit Instrument Model Development, February 1998,
                    as a consultant for the National Institute of Corrections (NIC), participated in a
                    planning session in Columbus, Ohio to produce security standards in the form of an
                    audit instrument to be provided through NIC to prison and detention jurisdictions
                    across the nation.</p></div>
            </li>

            <li>
                <h3>Book on Supermax Prisons</h3>

                <div><p class="robot-p-list">Book on Supermax Prisons, March 2001, request by American Correctional Association
                    to co-author a book on “supermax” prisons with specific contributions to constructing
                    a chapter on the use of force in the supermax environment, completed and published
                    January, 2003.</p></div>
            </li>

            <!--  *********** CORRECTIONS TODAY PORTION *********** -->

            <li>
                <h3>Corrections Today</h3>

                <div><p class="robot-p-list">Article published for “Corrections Today” Magazine, author, “Super Max Prisons -
                    Incapacitation With A Purpose”, July, 2001.</p></div>
                <div><p class="robot-p-list">Article, “Corrections Today”, author, “Emergency Management – Reaching the
                    Next Level”, Fall of 2004.</p></div>
                <div><p class="robot-p-list">Article, “Corrections Today”, ACA publication , State of Corrections,
                    “The Quiet Corrections”, accepted for publication in the Spring of 2005.
                    Concerns management of dangerous and disruptive inmates in high risk environments.</p></div>
                <div><p class="robot-p-list">Article published, “Corrections Today Magazine”, ACA Publications, February, 2008,
                    “Leadership for the 21st Century”, Co-author with Jason Heaton.</p></div>
            </li>

            <li>
                <h3>Leadership Guide for Deputy Directors</h3>

                <div><p class="robot-p-list">Editor, 2002, National Institute of Corrections Project, the development of a
                    “Leadership Guide for Deputy Directors” of correctional organizations. Solicited
                    and provided guidance to six authors writing articles related to the subject
                    “What’s going on in the correctional organization?” Most subjects related to
                    strategy development and cultural influences.</p></div>
            </li>

            <li>
                <h3>Guidelines For The Development Of A Security Program</h3>

                <div><p class="robot-p-list">Guidelines For The Development Of A Security Program, American Correctional Association,
                    2005, selected as the author of the Third Edition, project in progress. The only
                    publication that exists on the subject of correctional security and emergency management
                    prisons. Publication Completed April, 2006.</p></div>
            </li>

            <li>
                <h3>Sexual Misconduct Among Staff – The CSP Experience</h3>

                <div><p class="robot-p-list">ACA Publication, State of Corrections, “Sexual Misconduct Among Staff – The CSP
                    Experience”, accepted for publication in the Winter of 2007. Concerns management
                    strategies to reduce or eliminate sexual misconduct in the correctional workplace.
                    Received a special commendation on the article from John Suthers, Colorado Attorney
                    General.</p></div>
            </li>

            <li>
                <h3>Correctional Leadership for the 21st Century – The Human Element</h3>

                <div><p class="robot-p-list">“Correctional Leadership for the 21st Century – The Human Element”, February, 2008, Corrections
                    Today Magazine and Corrections Connection Network News website, October, 2007. Co-author.</p></div>
            </li>

            <li>
                <h3>Riots and Disturbances in Correctional Institutions</h3>

                <div><p class="robot-p-list">American Correctional Association, April, 2009, co-author of book project Riots and Disturbances
                    in Correctional Institutions, Published in 2014.</p></div>
            </li>

            <li>
                <h3>Relationship Warriors – Part I & Part II</h3>

                <div><p class="robot-p-list">Author, “Relationship Warriors – Part I & Part II”, published November/December,
                    2010, Corrections One.com.</p></div>
            </li>

            <li>
                <h3>Greening Corrections Technology Guidebook</h3>

                <div><p class="robot-p-list">Greening Corrections Technology Guidebook, National Institute of Justice, Paul Sheldon and
                    Eugene Atherton, April 2015.</p></div>
            </li>

        </ul>
    </div>
</div><br><br>




<?php include 'footer.php'; ?>
</body>
</html>

