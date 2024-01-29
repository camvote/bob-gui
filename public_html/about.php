<?php
echo file_get_contents(__DIR__ . "/style/header.html");
?>

<h1>About CamVote</h1>
<h3>Why CamVote over CamSU's voting system?</h3>
<p>
  - <b>Field-tested:</b> We use the open-source BoB system which has been used for thousands of elections over more than a decade throughout the university, without challenge. This system was built by David Eyers, Martin Lucas-Smith, David Turner, Simon Hopkins and Robin Whittaker. This system used to live at <a href="https://vote.cusu.cam.ac.uk/">https://vote.cusu.cam.ac.uk/</a>, but was retired in 2021 by CamSU.</p>
<p>
  - <b>Anonymity:</b> The security architecture means that your vote is never stored with your user ID, and cannot be easily associated by an admin. It is not possible for the election admins or Sysadmins to see how an individual voted.
</p>
<p>
  - <b>Verifiability:</b> The voting token system employed by BoB allows any individual to verify that their vote has been correctly included in the vote count - you do not have to trust the system to know that your vote has been correctly counted. In CamSU's election system, votes could be forged by an evil sysadmin (or indeed, the manual voting system is prone to mistakes or forged votes).
</p>
<p>
  - <b>Instant counts:</b> As CamVote vote counting happens automatically, results are instantly available at the end of an election. No waiting for someone to email you your election results.
<p>
  - <b>Open-source:</b> The source code for CamVote is <a href="https://github.com/camvote/bob">publicly</a> <a href="https://github.com/camvote/bob-gui">available</a> under a permissive GPL license, and we welcome contributions and reviews by anyone.
</p>
<p>
  CamVote is hosted on a virtual server hosted in Cambridge, with <a href="https://www.mythic-beasts.com/">Mythic Beasts</a>.
</p>

<h3>Current Sysadmins</h3>
<b>We are actively looking for new SysAdmins - please contact us at sysadmins@camvote.org if you would be willing to help out.</b>
<ul class="name-list sysadmin-list">
  <li><a href="mailto:lw664+camvote@cantab.ac.uk">Lewis Westwood Flood</a> (Jesus College Student Union)</li>
  <li><a href="mailto:mb2345@cam.ac.uk">Mikel Bober-Irizar</a> (Queen's College JCR)</li>
</ul>

<p><em>
  These users have access to the CamVote server. This server is hardened and setup with audit trails such that any tampering would be obvious to the other sysadmins. In the long term, we would like to move to a security architecture where no students are single-handedly capable of making system changes.
<br>
  While sysadmins have access to the server and code running on it, the system of vote verification means that a sysadmin would never be able to tamper with votes without this being verifiable by voters and returning officers. SysAdmins are elected by the Consortium at its Annual Meeting.
</em></p>

<h3>Current Members</h3>
<ul class="name-list members-list">
  <li>Jesus College Student Union (Chair, 2023)</li>
  <li>Queens' College JCR (Auditor, 2023)</li>
  <li>Robinson College Student Association</li>
  <li>King's College Student Union</li>
  <li>Lucy Cavendish JCR</li>
  <li>Lucy Cavendish MCR</li>
  <li>Churchill College JCR</li>
  <li>Newnham College JCR</li>
</ul>
<p>
CamVote is provided by the Cambridge Online Voting Consortium. The Consortium's members are ultimately responsible for the governance of CamVote, and support it financially.
<br>
If you're interested in joining the Consortium, email sysadmins@camvote.org.
</p>

<?php
echo file_get_contents(__DIR__ . "/style/footer.html");
?>
