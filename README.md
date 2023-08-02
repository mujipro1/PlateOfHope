<p align="center"># Plate of Hope</p>

![image](https://github.com/mujipro1/PlateOfHope/assets/116620251/b6106f3e-db7a-49d9-9185-941ba8e47688)

Plate of Hope is a web platform aimed at connecting food NGOs with people in need. It facilitates the process of donating food and resources to those who require assistance. The platform allows NGOs to register donations, specify donation areas, and enables beneficiaries to view available donation time slots. Additionally, users can volunteer during donation events, making it a community-driven initiative.


## Features

- Seamless connection between food NGOs and beneficiaries.
- Donation scheduling and area specification by NGOs.
- View available donation time slots for beneficiaries.
- Volunteer opportunities during donation events.
- Interactive map integration for easy location-based interactions.
- OTP verification for secure user registration and login.

## Technologies Used

- Laravel framework for robust web application development.
- Bootstrap for responsive and modern user interface design.
- Map integration using XYZ Maps API (or any relevant map API).
- OTP verification using SMS gateways.

## Installation

1. Clone this repository to your local machine:

   ```sh
   git clone https://github.com/mujipro1/PlateOfHope.git
   ```

2. Navigate to the project directory:

   ```sh
   cd PlateOfHope
   ```

3. Install required dependencies using Composer:

   ```sh
   composer install
   ```

4. Create a `.env` file by copying from `.env.example`:

   ```sh
   cp .env.example .env
   ```

5. Configure the `.env` file with your database, map API, and SMS gateway details.


6. Start the development server:

   ```sh
   php artisan serve
   ```

## Usage

1. Register as an NGO, beneficiary, or volunteer using OTP verification.
2. NGOs can register donations, specifying donation areas and time slots.
3. Beneficiaries can view available donation time slots and register for donations.
4. Volunteers can sign up for volunteering opportunities during donation events.
5. Interact with the integrated map to explore donation areas.
6. Stay connected with real-time updates on donation events and volunteer opportunities.

## Acknowledgments

- The concept and design of Plate of Hope were inspired by the desire to bridge the gap between food surplus and those in need.
