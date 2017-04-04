Week 5 Project: Encryption
Due: unspecified at 11:59pm

Overview:

You have been recruited by a network of spies known as APEX ("Agents with PHP and Encryption eXperience") and given the codename "agent99".

The APEX website provides agents with a set of general purpose encryption tools which can encrypt or decrypt any message from any source. The APEX website also provides a directory of agents and allows agents to send encrypted messages to each other.

Unfortunately, last week APEX was hacked by their nemesis, Dark Shadow. Dark Shadow agents hacked into APEX servers and destroyed all of the PHP cryptographic functions. APEX has determined that Dark Shadow was only able to modify three files: "private/crypto_functions.php", "public/agents/post_message.php", "public/agents/messages.php". APEX headquarters suspects that there is a double agent who helped Dark Shadow from the inside.

Your primary objectives are to restore the website to full functionality and to identify the double agent.

Important Note: In this assignment, private keys are being sent in web forms and stored in the database. This is only to facilitate the exercise. A private key should be kept secure and should never be transmitted or put in a database. In real life, these would be stored locally on each agent's computer. Do not peek at the private keys in the database during the exercise--pretend they do not exist.

Submitting Assignments: Submitted through Github, check out the Submitting Assignments page for more details.

Be sure to include a README containing a list of completed objectives, and include any written answers whenever objectives call for them.
Use this README template in order to have a complete README.
Assets: The following assets are necessary for completing this assignment.

 Project 5 Starting Database
 Project 5 Starting Code
Objectives:

The following objectives must be completed:

1. Symmetric Encrypt/Decrypt: This page allows agents to perform symmetric encryption and decryption using a key (a.k.a. a password) using the PHP OpenSSL Library.

Repair the symmetric encrypt and decrypt code (key_encrypt, key_decrypt). (Tips)
Finished example: Symmetric Encrypt/Decrypt
2. Encrypted Message 1: A message from a high-ranking government official was received late last night by APEX headquarters. You have been tasked with decrypting it and formulating a response. (Tips)

Read the  government message.
Communications to and from this official are encrypted using a rotating set of passwords depending on the day of the week.  Daily Passwords
You look at your wall calendar: today is Thursday.
Include your response message in the assignment README.
3. Generate Public-Private Keys: This page is used to generate a new public-private key pair using the PHP OpenSSL Library.

Repair the key generator code (generate_keys). (Tips)
APEX headquarters has recruited "johnsteed", a British intelligence agent, to join the team. You have been tasked with getting him set up in the APEX system. Generate a new pubic-private key pair and add him to the Agent Directory.
Finished example: Generate Keys
4. Asymmetric Encrypt/Decrypt: This page allows agents to encrypt messages using a public key and to decrypt messages using a private key using the PHP OpenSSL Library.

Repair the asymmetric encrypt and decrypt code (pkey_encrypt, pkey_decrypt). (Tips)
Finished example: Asymmetric Encrypt/Decrypt
5. Create/Verify Signature: This page allows agents to create a digital signature for a message (usually cipher text but it does not have to be) and also to verify that a digital signature matches a message using the PHP OpenSSL Library.

Repair the create and verify signature code (create_signature, verify_signature). (Tips)
Finished example: Digital Signature
6. Encrypted Message 2: You receive an email from secret agent "sydneybristow" with an encrypted message. Decrypt the message, verify the identify and integrity of the message, and then write a response. (Tips)

Read the  email from sydneybristow.
The public keys for all agents can be found in the Agent Directory.
You can also view your  private key.
Include your response message in the assignment README.
7. Agent Messages: This area allows agents to rapidly and securely send messages to each other. It has a list of all agents by codename and links to view their public keys. Each agent also has a dropbox where an agent can write a message in plaintext and the system will automatically encrypt the message (using the recipient's public key) and sign it (using the sender's private key). These encrypted messages are then shown in the Messages area for each agent. Unfortunately Dark Shadow has disabled most of this functionality and you will need restore it. (Tips)

Repair the dropbox code (agents/post_message.php).
Repair the messages area (agents/messages.php).
Display encrypted messages for all agents.
Messages should indicate whether the message signature is valid.
For a logged in user--in this case, you--messages will be automatically decrypted.
Finished example: Agent Directory
8. Identify the Double Agent: A USB flash drive is recovered from a suspected Dark Shadow hideout. The drive contains encryption keys and several encrypted emails. (Tips)

Download the contents of the  USB flash drive.
Decrypt as many email messages as possible.
Identify the double agent, but watch out for Dark Shadow's dirty tricks.
The following objectives are optional:

Bonus Objective 1. APEX headquarters believes that Dark Shadow gained access by using both an XSS exploit and an SQLI exploit. It appears the double agent made changes to the PHP code to enable these exploits.

Track down the bugs in the code and fix them. (Tips)
Bonus Objective 2. Create a report for APEX headquarters detailing all your discoveries (longer than 300 characters). Compose a secure email for sending over an insecure network. Everything APEX headquarters needs to decrypt and verify the integrity and authenticity of the message should be included in the email. Passwords should not be transmitted "in the clear". (Tips)

You will need the  APEX headquarters public key.
You can also view your  private key.
Include the email with your encrypted report in the assignment README.
Bonus Objective 3. APEX headquarters has sent you a feature request. They would like a way to determine if a symmetrically encrypted message has been altered.

Add a "Create/Verify Checksum" section to the Encryption Tools area. (Tips)
Advanced Objective 1. The symmetric encrypt/decrypt page supports the "AES-256-CBC" algorithm by default. Add code to support other symmetric algorithms and let users choose which cipher to use for encrypting and decrypting. (Tips)

Available ciphers
Recommended: "AES-128-CBC", "AES-192-CBC", "DES-EDE3-CBC", "BF-CBC"
