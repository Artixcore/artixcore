<section id="masterTopBar" class="bg-white border-bottom py-2 d-print-none">
    <div class="container-xxl d-flex align-items-center justify-content-between">
        <div id="ethPrice" class="d-none d-md-flex align-items-center gap-4 w-100 fs-sm">
            <div class="text-muted"><span class="text-muted">MATIC Price:</span> <a
                    href="chart/maticprice.html">$0.725206</a><span data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Changes in the last 24 hours"><span class="text-success"> (+1.13%)</span></span></div>
            <div class="text-muted d-none d-lg-block"><i class="fad fa-gas-pump me-1"></i> Gas: <span
                    id="spanGasTooltip" data-bs-toggle="tooltip" data-bs-html="true"><a href="gastracker.html"><span
                            class="gasPricePlaceHolder">30</span> GWei</a></span></div>
        </div>
        <div class="d-flex justify-content-end align-items-center gap-2 w-100">
            <div id="frmMaster" class="search-panel-container flex-grow-1 position-relative" style="width: 30rem;">
                <form action="https://polygonscan.com/search" method="GET" autocomplete="off" spellcheck="false"
                    class="auto-search-max-height">
                    <span class="d-flex align-items-center position-absolute top-0 bottom-0" title="Search"
                        style="left: 0.75rem;">
                        <i class="fa-regular fa-search fs-5 text-secondary"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg bg-light bg-focus-white pe-20"
                        autocomplete="off" spellcheck="false" id="search-panel" name="q"
                        placeholder="Search by Address / Txn Hash / Block / Token / Domain Name"
                        aria-describedby="button-header-search" onkeyup="handleSearchText(this);" maxlength="68"
                        style="padding-left: 2.375rem;" />
                    <a href="javascript:;"
                        class="clear-icon d-none align-items-center position-absolute top-0 bottom-0 my-auto d-flex align-items-center"
                        style="right: 3.375rem; cursor:pointer;">
                        <i class="fa-regular fa-xmark fs-5 text-secondary"></i>
                    </a>
                    <a href="javascript:;"
                        class="search-icon d-none btn btn-sm btn-white my-1.5 align-items-center position-absolute top-0 bottom-0 d-flex align-items-center"
                        style="right: 0.75rem; cursor:pointer;">
                        <i class="fa-regular fa-arrow-turn-down-left text-secondary"></i>
                    </a>
                    <input type="hidden" value id="hdnSearchText" />
                    <input type="hidden" value id="hdnSearchLabel" />
                    <input id="hdnIsTestNet" value="False" type="hidden" />
                    <span
                        class="shortcut-slash-icon align-items-center position-absolute top-0 bottom-0 align-items-center d-none d-sm-flex"
                        title="Search" style="right: 0.5rem;">
                        <kbd class="bg-dark bg-opacity-25 fw-semibold px-2 py-0.5 text-white">/</kbd>
                    </span>
                </form>
            </div>
            <div id="divThemeSetting" class="dropdown d-none d-lg-block">
                <button class="btn btn-lg btn-white text-primary content-center" type="button"
                    id="dropdownMenuTopbarSettings" data-bs-auto-close="outside" data-bs-toggle="dropdown"
                    aria-expanded="false" style="width: 2.375rem; height: 2.375rem;">
                    <span class="theme-btn-main"><i class="far fa-sun-bright theme-icon-active"
                            data-href="#fa-sun-bright"></i></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuTopbarSettings">
                    <li>
                        <button type="button" class="dropdown-item theme-btn active" data-bs-theme-value="light"
                            onclick="setThemeMode('light');">
                            <i class="far fa-sun-bright fa-fw dropdown-item-icon theme-icon me-1"
                                data-href="#fa-sun-bright"></i> Light
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item theme-btn" data-bs-theme-value="dim"
                            onclick="setThemeMode('dim');">
                            <i class="far fa-moon-stars fa-fw dropdown-item-icon theme-icon me-1"
                                data-href="#fa-moon-stars"></i> Dim
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item theme-btn" data-bs-theme-value="dark"
                            onclick="setThemeMode('dark');">
                            <i class="far fa-moon fa-fw dropdown-item-icon theme-icon me-1" data-href="#fa-moon"></i>
                            Dark
                        </button>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="settings.html">
                            <i class="far fa-gear fa-fw dropdown-item-icon me-1"></i> Site Settings <i
                                class="far fa-arrow-right ms-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="divTestNet" class="dropdown d-none d-lg-block">
                <button class="btn btn-lg btn-white content-center p-0" type="button" id="dropdownTopbarNetworks"
                    data-bs-toggle="dropdown" aria-expanded="false" style="width: 2.375rem; height: 2.375rem;">
                    <img width="18" data-img-theme="light"
                        src="assets/poly/images/svg/logos/chain-light2a89.svg?v=24.5.3.0"
                        alt="Polygon PoS Chain Logo">
                    <img width="18" data-img-theme="dim"
                        src="assets/poly/images/svg/logos/chain-dim2a89.svg?v=24.5.3.0" alt="Polygon PoS Chain Logo">
                    <img width="18" data-img-theme="dark"
                        src="assets/poly/images/svg/logos/chain-dark2a89.svg?v=24.5.3.0" alt="Polygon PoS Chain Logo">
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownTopbarNetworks">
                    <li><a class="dropdown-item active" href="index.html">Polygon Mainnet</a></li>
                    <li><a class="dropdown-item" href="https://zkevm.polygonscan.com/">zkEVM Mainnet</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="https://amoy.polygonscan.com/">Amoy Testnet</a></li>
                    <li><a class="dropdown-item" href="https://cardona-zkevm.polygonscan.com/">Cardona Testnet</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<header id="masterHeader" class="header sticky-top border-bottom d-print-none">
    <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0">
        <div class="container-xxl position-relative">
            <a class="navbar-brand" href="index.html" target="_parent" aria-label="PolygonScan">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('logo.png') }}" alt=" Artixcore logo">
            </a>
            <div class="d-flex align-items-center gap-4">
                <a class="link-dark d-block d-lg-none" href="login.html">
                    <i class="far fa-user-circle me-1"></i> Sign In
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-1 gap-lg-0 pt-4 pt-lg-0">
                    <li class="nav-item">
                        <a href="index.html" id="LI_default" class="nav-link" aria-current="page">
                            Home
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:;" id="LI_blockchain" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Blockchain</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li>
                                <a href="txs.html" id="LI12" class="dropdown-item">
                                    Transactions
                                </a>
                            </li>
                            <li>
                                <a href="txsPending.html" id="LI16" class="dropdown-item">
                                    Pending Transactions
                                </a>
                            </li>
                            <li>
                                <a href="txsInternal.html" id="LI14" class="dropdown-item">
                                    Contract Internal Transactions
                                </a>
                            </li>
                            <li>
                                <a href="txnbridge.html" id="LI77" class="dropdown-item">
                                    Plasma Deposit Transactions
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="blocks.html" id="LI_blocks" class="dropdown-item">
                                    View Blocks
                                </a>
                            </li>
                            <li>
                                <a href="blocks_forked.html" id="LI_blocks2" class="dropdown-item">
                                    Forked Blocks (Reorgs)
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="accounts.html" id="LI_accountall" class="dropdown-item">
                                    Top Accounts
                                </a>
                            </li>
                            <li>
                                <a href="contractsVerified.html" id="LI_contract_verified" class="dropdown-item">
                                    Verified Contracts
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="javascript:;" id="LI_tokens" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Tokens</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li>
                                <a href="tokens.html" id="LI21" class="dropdown-item">
                                    Top Tokens <span class="small text-muted">(ERC-20)</span>
                                </a>
                            </li>
                            <li>
                                <a href="tokentxns.html" id="LI1" class="dropdown-item">
                                    Token Transfers <span class="small text-muted">(ERC-20)</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="javascript:;" id="LI_Nfts" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">NFTs</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li>
                                <a href="nft-top-contracts.html" id="LI63" class="dropdown-item">
                                    Top NFTs
                                </a>
                            </li>
                            <li>
                                <a href="nft-top-mints.html" id="LI67" class="dropdown-item">
                                    Top Mints
                                </a>
                            </li>
                            <li>
                                <a href="nft-trades.html" id="LI64" class="dropdown-item">
                                    Latest Trades
                                </a>
                            </li>
                            <li>
                                <a href="nft-transfers.html" id="LI65" class="dropdown-item">
                                    Latest Transfers
                                </a>
                            </li>
                            <li>
                                <a href="nft-latest-mints.html" id="LI66" class="dropdown-item">
                                    Latest Mints
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="javascript:;" id="LI_resources" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li>
                                <a href="charts.html" id="LI_charts2" class="dropdown-item">
                                    Charts &amp; Stats
                                </a>
                            </li>
                            <li>
                                <a href="topstat.html" id="LI_topstat" class="dropdown-item">
                                    Top Statistics
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#" id="li_developers" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Developers</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li>
                                <a href="apis.html" id="LI5" class="dropdown-item">
                                    API Plans
                                </a>
                            </li>
                            <li>
                                <a href="https://docs.polygonscan.com/" id="LI6" class="dropdown-item"
                                    target="_blank">
                                    API Documentation
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="code-reader.html" id="A1" class="dropdown-item">
                                    Code Reader <span class="badge border bg-light text-muted">Beta</span>
                                </a>
                            </li>
                            <li>
                                <a href="loginc315.html" id="LI17" class="dropdown-item">
                                    Verify Contract
                                </a>
                            </li>
                            <li>
                                <a href="find-similar-contracts.html" id="LI55" class="dropdown-item">
                                    Similar Contract Search
                                </a>
                            </li>
                            <li>
                                <a href="contractdiffchecker.html" id="LI54" class="dropdown-item">
                                    Contract Diff Checker
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="vyper.html" id="LI27" class="dropdown-item">
                                    Vyper Online Compiler
                                </a>
                            </li>
                            <li>
                                <a href="opcode-tool.html" id="LI24" class="dropdown-item">
                                    Bytecode to Opcode
                                </a>
                            </li>
                            <li>
                                <a href="pushTx.html" id="LI10" class="dropdown-item">
                                    Broadcast Transaction
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown position-initial">
                        <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">More</a>
                        <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                            <div class="row">
                                <div class="col-lg order-last order-lg-first">
                                    <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                        <div>
                                            <h6>Tools &amp; Services</h6>
                                            <p>Discover more of PolygonScan's tools and services in one place.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm py-5">
                                    <h6 class="px-3 mb-3">Tools</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                <i class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                Converter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="exportData.html" id="LI51" class="dropdown-item">
                                                <i class="far fa-download fa-fw me-1"></i>CSV Export
                                            </a>
                                        </li>
                                        <li>
                                            <a href="balancecheck-tool.html" id="LI52" class="dropdown-item">
                                                <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account Balance
                                                Checker
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm py-5">
                                    <h6 class="px-3 mb-3">Explore</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                Tracker
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dex.html" id="LI4" class="dropdown-item">
                                                <i
                                                    class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                Tracker
                                            </a>
                                        </li>
                                        <li>
                                            <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node Tracker
                                            </a>
                                        </li>
                                        <li>
                                            <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                <i class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                Cloud
                                            </a>
                                        </li>
                                        <li>
                                            <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                <i
                                                    class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                Name Lookup
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm py-5">
                                    <h6 class="px-3 mb-3">Services</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="tokenapprovalchecker.html" id="LI49" class="dropdown-item">
                                                <i
                                                    class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                Approvals <span class="badge border bg-light text-muted">Beta</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="verifiedSignatures.html" id="LI29" class="dropdown-item">
                                                <i
                                                    class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                Signature
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                <i class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                Filter <span class="badge border bg-light text-muted">Beta</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Explorers</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li><a class="dropdown-item active" href="index.html">Polygon Mainnet</a></li>
                            <li><a class="dropdown-item" href="https://zkevm.polygonscan.com/">zkEVM Mainnet</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://amoy.polygonscan.com/">Amoy Testnet</a></li>
                            <li><a class="dropdown-item" href="https://cardona-zkevm.polygonscan.com/">Cardona
                                    Testnet</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Appearance &amp; Settings</a>
                        <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                            <li>
                                <button type="button" class="dropdown-item theme-btn active"
                                    data-bs-theme-value="light" onclick="setThemeMode('light');">
                                    <i class="far fa-sun-bright fa-fw dropdown-item-icon theme-icon me-1"
                                        data-href="#fa-sun-bright"></i> Light
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item theme-btn" data-bs-theme-value="dim"
                                    onclick="setThemeMode('dim');">
                                    <i class="far fa-moon-stars fa-fw dropdown-item-icon theme-icon me-1"
                                        data-href="#fa-moon-stars"></i> Dim
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item theme-btn" data-bs-theme-value="dark"
                                    onclick="setThemeMode('dark');">
                                    <i class="far fa-moon-stars fa-fw dropdown-item-icon theme-icon me-1"
                                        data-href="#fa-moon"></i> Dark
                                </button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="settings.html">
                                    <i class="far fa-gear fa-fw dropdown-item-icon me-1"></i> Site Settings <i
                                        class="far fa-arrow-right ms-1"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item align-self-center d-none d-lg-block">
                        <span class="text-secondary">|</span>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="login.html">
                            <i class="far fa-user-circle me-1"></i> Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
