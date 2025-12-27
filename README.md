# OxaPay Gateway for Paymenter

A **production-ready cryptocurrency payment gateway** for Paymenter, integrating directly with the **official OxaPay Merchant Invoice API**.

This gateway allows customers to pay invoices using cryptocurrency and enables **automatic invoice settlement and service provisioning** with zero manual intervention.

---

## Overview

- Built specifically for **Paymenter’s native payment and automation flow**
- Uses **OxaPay-hosted checkout** (no sensitive payment data touches your server)
- Webhook-based confirmation with shared-secret verification
- Designed for **real production environments**, not demos

---

## Features

- Cryptocurrency payments via OxaPay
- Official OxaPay Merchant Invoice API integration
- Automatic redirect to OxaPay checkout
- Secure webhook verification
- Automatic invoice payment confirmation
- Automatic service & server provisioning via Paymenter
- No manual intervention required
- Clean, lightweight, auditable implementation

---

## Payment Flow

1. Customer selects **OxaPay** on the invoice page  
2. Customer is redirected to OxaPay checkout  
3. After successful payment:
   - Customer is redirected back to the invoice
   - OxaPay sends a webhook to Paymenter  
4. Invoice is marked **Paid**  
5. Paymenter automatically provisions the service/server  

No polling. No cron jobs. No custom provisioning logic.

---

## Requirements

- Paymenter **v1.4.7 or newer**
- PHP **8.1+**
- OxaPay Merchant API key
- Webhook secret configured in OxaPay dashboard

If you don’t meet these requirements, don’t install it.

---

## Installation

1. Upload the gateway to:

2. Enable **OxaPay** from the Paymenter admin panel

3. Enter your **Merchant API key**

4. Configure the webhook URL in OxaPay:

5. Set the **webhook secret** in Paymenter It can be random letters
## Technical Notes

- Successful OxaPay responses return `result = 100`
- Checkout URL is provided as `payLink`
- Invoice settlement and service provisioning are handled entirely by Paymenter
- No custom server-creation or automation logic is required

---

## Screenshot

![OxaPay Paymenter Gateway Screenshot](Screenshot%202025-12-27%20123727.png)

---

## Support

This project is provided **as-is**.

For questions or issues:
- Discord: **Nothing_tk**
