<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body class="h-full">
    <div
        class="
      flex
      w-full
      mt-40
      mb-10
      justify-center
      content-center
      items-center
      space-x-4
    ">
        <div class="flex flex-col space-y-6">
            <h3 class="text-center">Listing NFTs for an ETH Address</h3>
            <div class="flex flex-col space-y-2">
                <button onclick="loginWithEth()"
                    class="
            rounded
            bg-white
            border border-gray-400
            hover:bg-gray-100
            py-2
            px-4
            text-gray-600
            hover:text-gray-700
          ">
                    Login & Save ETH Address
                </button>
                <p id="userAddress" class="text-gray-600"></p>
                <button id="logoutButton" onclick="logout()" class="hidden text-blue-500 underline">
                    Logout
                </button>
            </div>
            <button onclick="getOpenseaItems()" class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white">
                Get OpenSea Assets
            </button>

        </div>
    </div>

    <div class='w-full flex justify-center'>
        <div id='openseaItems' class="w-1/2 grid grid-cols-4 gap-2">
            <!-- Opensea items go here -->
        </div>
    </div>

    <script>
        window.userAddress = null;
        window.onload = async () => {
            // Init Web3 connected to ETH network
            if (!window.ethereum) {
                alert("No ETH brower extension detected.");
            }

            // Load in Localstore key
            window.userAddress = window.localStorage.getItem("userAddress");
            showAddress();
        };

        // Use this function to turn a 42 character ETH address
        // into an address like 0x345...12345
        function truncateAddress(address) {
            if (!address) {
                return "";
            }
            return `${address.substr(0, 5)}...${address.substr(
        address.length - 5,
        address.length
      )}`;
        }

        // Display or remove the users know address on the frontend
        function showAddress() {
            if (!window.userAddress) {
                document.getElementById("userAddress").innerText = "";
                document.getElementById("logoutButton").classList.add("hidden");
                return false;
            }

            document.getElementById(
                "userAddress"
            ).innerText = `ETH Address: ${truncateAddress(window.userAddress)}`;
            document.getElementById("logoutButton").classList.remove("hidden");
        }

        // remove stored user address and reset frontend
        function logout() {
            window.userAddress = null;
            window.localStorage.removeItem("userAddress");
            showAddress();
        }

        // Login with Web3 via Metamasks window.ethereum library
        async function loginWithEth() {
            // if (window.ethereum) {
            //     const web3 = new Web3(ethereum);
            //     try {
            //         await ethereum.enable();
            //         var accounts = await web3.eth.getAccounts();
            //         console.log(accounts)

            //     } catch (error) {
            //         // User denied account access...
            //     }
            // }
            if (window.ethereum) {
                try {
                    // We use this since ethereum.enable() is deprecated. This method is not
                    // available in Web3JS - so we call it directly from metamasks' library
                    const selectedAccount = await window.ethereum
                        .request({
                            method: "eth_requestAccounts",
                        })
                        .then((accounts) => accounts[0])
                        .catch(() => {
                            throw Error("No account selected!");
                        });
                    window.userAddress = selectedAccount;
                    window.localStorage.setItem("userAddress", selectedAccount);
                    showAddress();
                } catch (error) {
                    console.error(error);
                }
            } else {
                alert("No ETH brower extension detected.");
            }
        }

        async function getOpenseaItems() {
            if (!window.userAddress) {
                return
            }
            const osContainer = document.getElementById('openseaItems')

            const items = await fetch(
                    `https://api.opensea.io/api/v1/assets?owner=${window.userAddress}&order_direction=desc&offset=0&limit=50`
                    )
                .then((res) => res.json())
                .then((res) => {
                    return res.assets
                })
                .catch((e) => {
                    console.error(e)
                    console.error('Could not talk to OpenSea')
                    return null
                })

            if (items.length === 0) {
                return
            }

            items.forEach((nft) => {
                const {
                    name,
                    image_url,
                    description,
                    permalink
                } = nft

                const newElement = document.createElement('div')
                newElement.innerHTML = `
          <!-- Opensea listing item-->
          <a href='${permalink}' target="_blank">
            <div class='flex flex-col'>
              <img
                src='${image_url}'
                class='w-full rounded-lg' />
              <div class='flex-col w-full space-y-1'>
                <p class='text-gray-800 text-lg'>${name}</p>
                <p class='text-gray-500 text-xs word-wrap'>${description ?? ''}</p>
              </div>
            </div>
          </a>
          <!-- End Opensea listing item-->
        `

                osContainer.appendChild(newElement)
            })
        }
    </script>
</body>
