
# Module configuration
module.tx_colormanager_tools_colormanageradmin {
  persistence {
    storagePid = {$module.tx_colormanager_admin.persistence.storagePid}
  }
  view {
    templateRootPaths.0 = EXT:color_manager/Resources/Private/Backend/Templates/
    templateRootPaths.1 = {$module.tx_colormanager_admin.view.templateRootPath}
    partialRootPaths.0 = EXT:color_manager/Resources/Private/Backend/Partials/
    partialRootPaths.1 = {$module.tx_colormanager_admin.view.partialRootPath}
    layoutRootPaths.0 = EXT:color_manager/Resources/Private/Backend/Layouts/
    layoutRootPaths.1 = {$module.tx_colormanager_admin.view.layoutRootPath}
  }
}
