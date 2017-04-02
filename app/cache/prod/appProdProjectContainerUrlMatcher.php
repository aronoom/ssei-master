<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // projet_checkUser
        if ($pathinfo === '/check') {
            return array (  '_controller' => 'ProjetBundle\\Controller\\ProjetController::checkAction',  '_route' => 'projet_checkUser',);
        }

        // projet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'projet_homepage');
            }

            return array (  '_controller' => 'ProjetBundle\\Controller\\ProjetController::listerAction',  '_route' => 'projet_homepage',);
        }

        // projet_index
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_index')), array (  '_controller' => 'ProjetBundle\\Controller\\ProjetController::indexAction',));
        }

        // projet_ajouter
        if ($pathinfo === '/ajouter') {
            return array (  '_controller' => 'ProjetBundle\\Controller\\ProjetController::ajouterAction',  '_route' => 'projet_ajouter',);
        }

        // projet_supprimer
        if ($pathinfo === '/supprimer') {
            return array (  '_controller' => 'ProjetBundle\\Controller\\ProjetController::supprimerAction',  '_route' => 'projet_supprimer',);
        }

        // projet_modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_modifier')), array (  '_controller' => 'ProjetBundle\\Controller\\ProjetController::modifierAction',));
        }

        // projet_lister_composante
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_lister_composante')), array (  '_controller' => 'ProjetBundle\\Controller\\ComposanteController::listerAction',));
        }

        // projet_ajouter_composante
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_ajouter_composante')), array (  '_controller' => 'ProjetBundle\\Controller\\ComposanteController::ajouterAction',));
        }

        // projet_modifier_composante
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_modifier_composante')), array (  '_controller' => 'ProjetBundle\\Controller\\ComposanteController::modifierAction',));
        }

        // projet_supprimer_composante
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_supprimer_composante')), array (  '_controller' => 'ProjetBundle\\Controller\\ComposanteController::supprimerAction',));
        }

        // projet_lister_activite
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/(?P<comp_id>[^/]++)/activite$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_lister_activite')), array (  '_controller' => 'ProjetBundle\\Controller\\ActiviteController::listerAction',));
        }

        // projet_ajouter_activite
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/(?P<comp_id>[^/]++)/activite/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_ajouter_activite')), array (  '_controller' => 'ProjetBundle\\Controller\\ActiviteController::ajouterAction',));
        }

        // projet_modifier_activite
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/(?P<comp_id>[^/]++)/activite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_modifier_activite')), array (  '_controller' => 'ProjetBundle\\Controller\\ActiviteController::modifierAction',));
        }

        // projet_supprimer_activite
        if (preg_match('#^/(?P<projet_id>[^/]++)/composante/(?P<comp_id>[^/]++)/activite/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_supprimer_activite')), array (  '_controller' => 'ProjetBundle\\Controller\\ActiviteController::supprimerAction',));
        }

        // projet_descriptif_activite_lister
        if (preg_match('#^/(?P<projet_id>[^/]++)/composant/(?P<comp_id>[^/]++)/activite/(?P<act_id>[^/]++)/descriptif$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_activite_lister')), array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifActiviteController::listerAction',));
        }

        // projet_descriptif_activite_ajouter
        if (preg_match('#^/(?P<projet_id>\\d+)/composant/(?P<comp_id>\\d+)/activite/(?P<act_id>\\d+)/descriptif/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_activite_ajouter')), array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifActiviteController::ajouterAction',));
        }

        // projet_descriptif_activite_modifier
        if (preg_match('#^/(?P<projet_id>[^/]++)/composant/(?P<comp_id>[^/]++)/activite/(?P<act_id>[^/]++)/descriptif/modifier$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_activite_modifier')), array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifActiviteController::modifierAction',));
        }

        // projet_descriptif_activite_supprimer
        if (preg_match('#^/(?P<projet_id>[^/]++)/composant/(?P<comp_id>[^/]++)/activite/(?P<act_id>[^/]++)/descriptif/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_activite_supprimer')), array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifActiviteController::supprimerAction',));
        }

        // projet_descriptif_ajouter
        if (preg_match('#^/(?P<id>[^/]++)/descriptif/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_ajouter')), array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifController::ajouterAction',));
        }

        // projet_descriptif_modifier
        if (preg_match('#^/(?P<idDescriptifProjet>[^/]++)/descriptif/modifier$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_modifier')), array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifController::modifierAction',));
        }

        // projet_descriptif_supprimer
        if ($pathinfo === '/descriptif/supprimer') {
            return array (  '_controller' => 'ProjetBundle\\Controller\\DescriptifController::supprimerAction',  '_route' => 'projet_descriptif_supprimer',);
        }

        // projet_descriptif_situation_annuelle_liste
        if (preg_match('#^/(?P<idDescriptifProjet>[^/]++)/descriptif/(?P<idDescriptifParUi>[^/]++)/liste_situation_annuelle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_liste')), array (  '_controller' => 'ProjetBundle\\Controller\\SituationAnnuelleController::listeAction',));
        }

        // projet_descriptif_situation_annuelle_ajouter
        if (preg_match('#^/(?P<idDescriptifProjet>[^/]++)/descriptif/(?P<idDescriptifParUi>[^/]++)/liste_situation_annuelle/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_ajouter')), array (  '_controller' => 'ProjetBundle\\Controller\\SituationAnnuelleController::ajouterAction',));
        }

        // projet_descriptif_situation_annuelle_modifier
        if (preg_match('#^/(?P<idDescriptifProjet>[^/]++)/descriptif/(?P<idDescriptifParUi>[^/]++)/liste_situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/modifier$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_modifier')), array (  '_controller' => 'ProjetBundle\\Controller\\SituationAnnuelleController::modifierAction',));
        }

        // projet_descriptif_situation_annuelle_supprimer
        if (preg_match('#^/(?P<idDescriptifProjet>[^/]++)/situation_annuelle/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_supprimer')), array (  '_controller' => 'ProjetBundle\\Controller\\SituationAnnuelleController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/situation_annuelle')) {
            // projet_descriptif_situation_annuelle_objectif_liste
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/objectifs/liste$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_objectif_liste')), array (  '_controller' => 'ProjetBundle\\Controller\\ObjectifController::listeAction',));
            }

            // projet_descriptif_situation_annuelle_objectif_ajouter
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/objectifs/ajouter$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_objectif_ajouter')), array (  '_controller' => 'ProjetBundle\\Controller\\ObjectifController::ajouterAction',));
            }

            // projet_descriptif_situation_annuelle_objectif_modifier
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/objectifs/modifier/(?P<idObjectif>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_objectif_modifier')), array (  '_controller' => 'ProjetBundle\\Controller\\ObjectifController::modifierAction',));
            }

            // projet_descriptif_situation_annuelle_objectif_supprimer
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/objectifs/supprimer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_objectif_supprimer')), array (  '_controller' => 'ProjetBundle\\Controller\\ObjectifController::supprimerAction',));
            }

            // projet_descriptif_situation_annuelle_realisation_liste
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/realisations/liste$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_realisation_liste')), array (  '_controller' => 'ProjetBundle\\Controller\\RealisationController::listeAction',));
            }

            // projet_descriptif_situation_annuelle_realisation_ajouter
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/realisations/ajouter$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_realisation_ajouter')), array (  '_controller' => 'ProjetBundle\\Controller\\RealisationController::ajouterAction',));
            }

            // projet_descriptif_situation_annuelle_realisation_modifier
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/realisations/modifier/(?P<idRealisation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_realisation_modifier')), array (  '_controller' => 'ProjetBundle\\Controller\\RealisationController::modifierAction',));
            }

            // projet_descriptif_situation_annuelle_realisation_supprimer
            if (preg_match('#^/situation_annuelle/(?P<idSituationAnnuelle>[^/]++)/realisations/supprimer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_descriptif_situation_annuelle_realisation_supprimer')), array (  '_controller' => 'ProjetBundle\\Controller\\RealisationController::supprimerAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/region')) {
                // zone_region
                if (rtrim($pathinfo, '/') === '/admin/region') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'zone_region');
                    }

                    return array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::listerAction',  '_route' => 'zone_region',);
                }

                // zone_ajouter_region
                if ($pathinfo === '/admin/region/ajouter') {
                    return array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::ajouterAction',  '_route' => 'zone_ajouter_region',);
                }

                // zone_supprimer_region
                if ($pathinfo === '/admin/region/supprimer') {
                    return array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::supprimerAction',  '_route' => 'zone_supprimer_region',);
                }

                // zone_modifier_region
                if (0 === strpos($pathinfo, '/admin/region/modifier') && preg_match('#^/admin/region/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_modifier_region')), array (  '_controller' => 'ZoneBundle\\Controller\\RegionController::modifierAction',));
                }

                // zone_district
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::listerAction',));
                }

                // zone_ajouter_district
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/ajouter$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_ajouter_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::ajouterAction',));
                }

                // zone_supprimer_district
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_supprimer_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::supprimerAction',));
                }

                // zone_modifier_district
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_modifier_district')), array (  '_controller' => 'ZoneBundle\\Controller\\DistrictController::modifierAction',));
                }

                // zone_commune
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/(?P<district_id>[^/]++)/commune$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::listerAction',));
                }

                // zone_ajouter_commune
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/(?P<district_id>[^/]++)/commune/ajouter$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_ajouter_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::ajouterAction',));
                }

                // zone_supprimer_commune
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/(?P<district_id>[^/]++)/commune/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_supprimer_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::supprimerAction',));
                }

                // zone_modifier_commune
                if (preg_match('#^/admin/region/(?P<region_id>[^/]++)/district/(?P<district_id>[^/]++)/commune/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_modifier_commune')), array (  '_controller' => 'ZoneBundle\\Controller\\CommuneController::modifierAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/indicateurs')) {
                if (0 === strpos($pathinfo, '/admin/indicateurs/indicateur')) {
                    // indicateur_liste
                    if ($pathinfo === '/admin/indicateurs/indicateur') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::listeAction',  '_route' => 'indicateur_liste',);
                    }

                    // indicateur_ajouter
                    if ($pathinfo === '/admin/indicateurs/indicateur/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::ajouterAction',  '_route' => 'indicateur_ajouter',);
                    }

                    // indicateur_listeAjax
                    if ($pathinfo === '/admin/indicateurs/indicateur/listeN1/ajax') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::listeAjaxAction',  '_route' => 'indicateur_listeAjax',);
                    }

                    // indicateur_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/indicateur/modifier') && preg_match('#^/admin/indicateurs/indicateur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicateur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::modifierAction',));
                    }

                    // indicateur_supprimer
                    if (rtrim($pathinfo, '/') === '/admin/indicateurs/indicateur/supprimer') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'indicateur_supprimer');
                        }

                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\IndicateurController::supprAction',  '_route' => 'indicateur_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/activite')) {
                    // activite_liste
                    if ($pathinfo === '/admin/indicateurs/activite') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::listeAction',  '_route' => 'activite_liste',);
                    }

                    // activite_ajouter
                    if ($pathinfo === '/admin/indicateurs/activite/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::ajouterAction',  '_route' => 'activite_ajouter',);
                    }

                    // activite_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/activite/modifier') && preg_match('#^/admin/indicateurs/activite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::modifierAction',));
                    }

                    // activite_supprimer
                    if ($pathinfo === '/admin/indicateurs/activite/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ActiviteController::supprAction',  '_route' => 'activite_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/modeCalcul')) {
                    // modeCalcul_liste
                    if ($pathinfo === '/admin/indicateurs/modeCalcul') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::listeAction',  '_route' => 'modeCalcul_liste',);
                    }

                    // modeCalcul_ajouter
                    if ($pathinfo === '/admin/indicateurs/modeCalcul/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::ajouterAction',  '_route' => 'modeCalcul_ajouter',);
                    }

                    // modeCalcul_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/modeCalcul/modifier') && preg_match('#^/admin/indicateurs/modeCalcul/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modeCalcul_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::modifierAction',));
                    }

                    // modeCalcul_supprimer
                    if ($pathinfo === '/admin/indicateurs/modeCalcul/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\ModeCalculController::supprAction',  '_route' => 'modeCalcul_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/nature')) {
                    // nature_liste
                    if ($pathinfo === '/admin/indicateurs/nature') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::listeAction',  '_route' => 'nature_liste',);
                    }

                    // nature_ajouter
                    if ($pathinfo === '/admin/indicateurs/nature/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::ajouterAction',  '_route' => 'nature_ajouter',);
                    }

                    // nature_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/nature/modifier') && preg_match('#^/admin/indicateurs/nature/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nature_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::modifierAction',));
                    }

                    // nature_supprimer
                    if ($pathinfo === '/admin/indicateurs/nature/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\NatureController::supprAction',  '_route' => 'nature_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/periodicite')) {
                    // periodicite_liste
                    if ($pathinfo === '/admin/indicateurs/periodicite') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::listeAction',  '_route' => 'periodicite_liste',);
                    }

                    // periodicite_ajouter
                    if ($pathinfo === '/admin/indicateurs/periodicite/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::ajouterAction',  '_route' => 'periodicite_ajouter',);
                    }

                    // periodicite_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/periodicite/modifier') && preg_match('#^/admin/indicateurs/periodicite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodicite_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::modifierAction',));
                    }

                    // periodicite_supprimer
                    if ($pathinfo === '/admin/indicateurs/periodicite/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\PeriodiciteController::supprAction',  '_route' => 'periodicite_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/s')) {
                    if (0 === strpos($pathinfo, '/admin/indicateurs/sous_secteur')) {
                        // sous_secteur_liste
                        if ($pathinfo === '/admin/indicateurs/sous_secteur') {
                            return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::listeAction',  '_route' => 'sous_secteur_liste',);
                        }

                        // sous_secteur_ajouter
                        if ($pathinfo === '/admin/indicateurs/sous_secteur/ajouter') {
                            return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::ajouterAction',  '_route' => 'sous_secteur_ajouter',);
                        }

                        // sous_secteur_modifier
                        if (0 === strpos($pathinfo, '/admin/indicateurs/sous_secteur/modifier') && preg_match('#^/admin/indicateurs/sous_secteur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_secteur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::modifierAction',));
                        }

                        // sous_secteur_supprimer
                        if ($pathinfo === '/admin/indicateurs/sous_secteur/supprimer') {
                            return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SousSecteurController::supprAction',  '_route' => 'sous_secteur_supprimer',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/indicateurs/subdivision')) {
                        // subdivision_liste
                        if ($pathinfo === '/admin/indicateurs/subdivision') {
                            return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::listeAction',  '_route' => 'subdivision_liste',);
                        }

                        // subdivision_ajouter
                        if ($pathinfo === '/admin/indicateurs/subdivision/ajouter') {
                            return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::ajouterAction',  '_route' => 'subdivision_ajouter',);
                        }

                        // subdivision_modifier
                        if (0 === strpos($pathinfo, '/admin/indicateurs/subdivision/modifier') && preg_match('#^/admin/indicateurs/subdivision/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'subdivision_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::modifierAction',));
                        }

                        // subdivision_supprimer
                        if ($pathinfo === '/admin/indicateurs/subdivision/supprimer') {
                            return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\SubdivisionController::supprAction',  '_route' => 'subdivision_supprimer',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/type_indicateur')) {
                    // type_indicateur_liste
                    if ($pathinfo === '/admin/indicateurs/type_indicateur') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::listeAction',  '_route' => 'type_indicateur_liste',);
                    }

                    // type_indicateur_ajouter
                    if ($pathinfo === '/admin/indicateurs/type_indicateur/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::ajouterAction',  '_route' => 'type_indicateur_ajouter',);
                    }

                    // type_indicateur_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/type_indicateur/modifier') && preg_match('#^/admin/indicateurs/type_indicateur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_indicateur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::modifierAction',));
                    }

                    // type_indicateur_supprimer
                    if ($pathinfo === '/admin/indicateurs/type_indicateur/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\TypeController::supprAction',  '_route' => 'type_indicateur_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/indicateurs/unite_indicateur')) {
                    // unite_indicateur_liste
                    if ($pathinfo === '/admin/indicateurs/unite_indicateur') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::listeAction',  '_route' => 'unite_indicateur_liste',);
                    }

                    // unite_indicateur_ajouter
                    if ($pathinfo === '/admin/indicateurs/unite_indicateur/ajouter') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::ajouterAction',  '_route' => 'unite_indicateur_ajouter',);
                    }

                    // unite_indicateur_modifier
                    if (0 === strpos($pathinfo, '/admin/indicateurs/unite_indicateur/modifier') && preg_match('#^/admin/indicateurs/unite_indicateur/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'unite_indicateur_modifier')), array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::modifierAction',));
                    }

                    // unite_indicateur_supprimer
                    if ($pathinfo === '/admin/indicateurs/unite_indicateur/supprimer') {
                        return array (  '_controller' => 'Proc\\IndicateurBundle\\Controller\\UniteController::supprAction',  '_route' => 'unite_indicateur_supprimer',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
                // user_admin_homepage
                if (rtrim($pathinfo, '/') === '/admin/utilisateurs') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_admin_homepage');
                    }

                    return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_admin_homepage',);
                }

                if (0 === strpos($pathinfo, '/admin/utilisateurs/users')) {
                    // user_admin_userList
                    if ($pathinfo === '/admin/utilisateurs/users') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userListAction',  '_route' => 'user_admin_userList',);
                    }

                    // user_admin_userAdd
                    if ($pathinfo === '/admin/utilisateurs/users/ajouter') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_user_admin_userAdd;
                        }

                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userAddAction',  '_route' => 'user_admin_userAdd',);
                    }
                    not_user_admin_userAdd:

                    // user_admin_userEdit
                    if (0 === strpos($pathinfo, '/admin/utilisateurs/users/modifier') && preg_match('#^/admin/utilisateurs/users/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_user_admin_userEdit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_userEdit')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userEditAction',));
                    }
                    not_user_admin_userEdit:

                    if (0 === strpos($pathinfo, '/admin/utilisateurs/users/s')) {
                        // user_admin_show
                        if (0 === strpos($pathinfo, '/admin/utilisateurs/users/show') && preg_match('#^/admin/utilisateurs/users/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_show')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userShowAction',));
                        }

                        // user_admin_userDel
                        if ($pathinfo === '/admin/utilisateurs/users/supprimer/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_user_admin_userDel;
                            }

                            return array (  '_controller' => 'Proc\\UserBundle\\Controller\\UserController::userDelAction',  '_route' => 'user_admin_userDel',);
                        }
                        not_user_admin_userDel:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/utilisateurs/groups')) {
                    // groupe_user_liste
                    if ($pathinfo === '/admin/utilisateurs/groups') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::listeAction',  '_route' => 'groupe_user_liste',);
                    }

                    // groupe_user_ajouter
                    if ($pathinfo === '/admin/utilisateurs/groups/ajouter') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::ajouterAction',  '_route' => 'groupe_user_ajouter',);
                    }

                    // groupe_user_modifier
                    if (0 === strpos($pathinfo, '/admin/utilisateurs/groups/modifier') && preg_match('#^/admin/utilisateurs/groups/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_user_modifier')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::modifierAction',));
                    }

                    // groupe_user_supprimer
                    if ($pathinfo === '/admin/utilisateurs/groups/supprimer') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\GroupController::supprAction',  '_route' => 'groupe_user_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/utilisateurs/entites')) {
                    // entite_liste
                    if ($pathinfo === '/admin/utilisateurs/entites') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::listeAction',  '_route' => 'entite_liste',);
                    }

                    // entite_ajouter
                    if ($pathinfo === '/admin/utilisateurs/entites/ajouter') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::ajouterAction',  '_route' => 'entite_ajouter',);
                    }

                    // entite_modifier
                    if (0 === strpos($pathinfo, '/admin/utilisateurs/entites/modifier') && preg_match('#^/admin/utilisateurs/entites/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'entite_modifier')), array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::modifierAction',));
                    }

                    // entite_supprimer
                    if ($pathinfo === '/admin/utilisateurs/entites/supprimer') {
                        return array (  '_controller' => 'Proc\\UserBundle\\Controller\\EntiteController::supprAction',  '_route' => 'entite_supprimer',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
