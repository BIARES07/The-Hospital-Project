## Important Warning

**This project was originally developed in Spanish.**

Due to this, you may encounter inconsistencies or confusions in the documentation you are about to read. Although I have made a significant effort to adapt the documentation to English and make it as fluid as possible, **I strongly recommend reading all the content carefully and cautiously** before performing any tests or revisions to the project.

**Recommendations:**

* **Read all the documentation:** Make sure you fully understand all aspects of the project before starting.
* **Review carefully:** Pay special attention to sections that may be confusing or ambiguous.
  

**Thank you for your understanding!**

Now, let's get down to the rest of the documentation.



## Table of Contents

* **[Introduction](https://github.com/BIARES07/The-Hospital-Project/new/main?filename=README.md#introduction)**
* **[Patient Form](https://github.com/BIARES07/The-Hospital-Project/tree/main#patient-form)**
* **[Appointment Manager](https://github.com/BIARES07/The-Hospital-Project/tree/main#appointment-manager)**
* **[Final Notes](https://github.com/BIARES07/The-Hospital-Project/new/main?filename=README.md#final-notes)**
 

## Introduction

This project was carried out as part of my university community service for a hospital in my country. Being one of my first projects, I set out to develop a system that would streamline the process of scheduling medical appointments through an online platform.

The central idea was to create a system in which patients could send the necessary information for their medical record directly from home, and that this information would be received efficiently by the medical staff.

To meet this objective, the project was divided into two main parts:

* **Patient form:** This section is designed for patients to enter their personal data in a simple and secure way.
* **Appointment manager:** In this area, the hospital's medical and administrative staff can manage scheduled appointments, access patient information, and perform other related tasks.


## Patient Form
![2024-09-18 16_46_24-Greenshot](https://github.com/user-attachments/assets/44f9fffb-0713-41ca-a3f8-eb3cbeecb169)

In the previous image, we can appreciate what the patient form looks like. Here, patients provide all the necessary information required. The form is composed as follows:

* **Names** (validated for letters only)
* **Last Names** (validated for letters only)
* **Phone Number** (validated for national numbers, which must start with the following prefixes "0412, 0414, 0424, 0416, 0426" and add 7 additional numbers after each prefix)
* **Email** (validated in email format)
* **Date of Birth**
* **Specialty** (take into account the chosen specialty as it will be useful later)

  ![2024-09-18 16_47_40-Window](https://github.com/user-attachments/assets/936e25f4-9d38-4e6c-9f15-09e65b89acc7)

  For this example we chose *psychology* as a specialty

Once all the fields are filled out, we press send. If everything works, it will take us to the following page:
  ![2024-09-18 16_51_08-Window](https://github.com/user-attachments/assets/ddd9954d-2169-4307-9425-d400a8301696)

This tells us that our data has been sent successfully. If we click where indicated, we can download an automatically generated PDF that serves as a voucher for our appointment.
Now that we have finished with this, we can return to the beginning and press the following button:


![2024-09-18 16_54_22-Window](https://github.com/user-attachments/assets/2a4d7a22-8d9c-44f6-8e61-dc756e95e2bb)


## Appointment Manager
After pressing the previous button, we will access the following page:

![2024-09-18 16_55_33-Greenshot](https://github.com/user-attachments/assets/e043a62c-3a7f-4c6b-859d-f341731f6b82)

As described earlier, this is our appointment manager. As you can see, it is a very basic login page without any flashy elements. This part of the project is not publicly accessible, 
so we don’t have an option to register as users (since, as mentioned before, only doctors and hospital staff can access this section). However, for this demonstration, 
I have a special user account that you can use as well ;)

* *User:* SuperB
* *pass:* 123

With these credentials, you will be able to log in without any issues. Once you do, it will take us to the next panel:

![2024-09-18 17_09_20-Greenshot](https://github.com/user-attachments/assets/e9d7b3da-b3ee-459d-8a51-14f223e01b2b)

This panel contains various elements that, however, we will not consider for this demonstration. We will only focus on the data we previously submitted in the patient form,
so we will only go to the *menu* button in the upper right corner:

![2024-09-18 17_09_46-Window](https://github.com/user-attachments/assets/877aa40f-e4a8-443d-a574-17e8b5580fad)

As you can see, all the specialties expressed in the patient form are also displayed here,
therefore our data will be found within the specialty we previously chose (which was *psychology*). We will click there.

![2024-09-18 17_11_11-Greenshot](https://github.com/user-attachments/assets/f2209e49-2693-4f03-b4a7-ced8fd1dfe66)

Once done, the following table will open, which will contain all the data we have provided to the form. In this part, we can only perform two actions: *delete and save as PDF*.
All records received in each specialty will be stored in the order of arrival, they can be deleted or saved all in a PDF as seen, (feel free to test).

## Final Notes

* This project is a copy of the original, so there are things that I removed because I thought they were unnecessary for this demonstration, also for privacy reasons of the institution.
* Despite everything, this is one of my first projects, so there are things that still need to be polished.
* I want to remind you again that this entire project is originally from a Hispanic context, so browse with discretion.

  The following languages ​​were used for the development of this project:
  * **Frontend:** HTML, CSS, Javascript
  *  **Backend:** PHP + FPDF Library

 Now, thank you very much for taking the time to read this, it will be until next time. :)

