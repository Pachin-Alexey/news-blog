<?php

namespace BlogBundle\DataFixtures\ORM;


use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaulArticleData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog = new Blog();

        $blog->setTitle("What is Lorem Ipsum?");
        $blog->setBody("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        $blog->setSummary("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 1");
        $blog->setBody("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis ornare orci id auctor. Praesent a enim at nisl congue pellentesque posuere quis est. Sed mollis lobortis finibus. Donec elit mi, consectetur ut dictum eget, tincidunt vel justo. In hac habitasse platea dictumst. Donec ornare libero at ligula viverra rutrum. Pellentesque viverra, odio quis consectetur convallis, ipsum augue posuere justo, non hendrerit risus elit sed ligula. Nullam vel quam finibus, interdum sapien vel, maximus neque. Ut eu magna ut ipsum convallis placerat. Praesent turpis velit, fringilla accumsan rhoncus at, egestas ac urna. Sed cursus gravida velit. Sed vel ipsum mi. Donec malesuada arcu lacinia purus pulvinar, vitae commodo lectus facilisis. Vivamus tincidunt purus a lobortis viverra. Nulla eu aliquet mauris. Nulla id aliquet orci, aliquet consequat arcu.");
        $blog->setSummary("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis ornare orci id auctor.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 2");
        $blog->setBody("Sed ultrices volutpat ipsum eget accumsan. Nullam vel augue in turpis lobortis congue. Nam quis pretium nibh, ac porta risus. Pellentesque semper pretium fermentum. Mauris cursus et arcu eu porttitor. Aenean luctus nisi ligula, non aliquet augue condimentum ac. Aenean dolor ipsum, tincidunt vitae tempus non, pellentesque ut lacus. Pellentesque vitae erat posuere, condimentum nibh et, accumsan eros. Suspendisse eu dui metus. Phasellus a risus vel tellus blandit posuere pulvinar eu urna. Morbi dui dui, faucibus et lorem at, elementum faucibus mauris. Aliquam erat volutpat.");
        $blog->setSummary("Sed ultrices volutpat ipsum eget accumsan. Nullam vel augue in turpis lobortis congue.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 3");
        $blog->setBody("Sed eget lacus euismod, laoreet ligula at, fermentum tortor. Nunc ut libero sed ex euismod viverra. Maecenas lectus augue, molestie vitae egestas quis, lacinia a erat. Aenean congue velit et enim vehicula tempor. Sed congue blandit ligula et mattis. Nullam quis mi non tortor vestibulum malesuada. Ut molestie bibendum ante vitae lacinia. Morbi sit amet rhoncus nisi, nec rutrum orci.");
        $blog->setSummary("Sed eget lacus euismod, laoreet ligula at, fermentum tortor. Nunc ut libero sed ex euismod viverra.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 4");
        $blog->setBody("Quisque mattis pretium neque lacinia facilisis. Fusce pulvinar, risus quis tempor hendrerit, quam justo mattis mi, ut porta neque ligula et dui. Mauris cursus fringilla diam, mattis feugiat nulla interdum nec. Duis dapibus ultricies mi, quis vestibulum urna iaculis eget. Vivamus sem ligula, venenatis sit amet volutpat vel, dignissim et mauris. In non tempor lorem. Donec a condimentum urna. Duis in pulvinar dolor, eget maximus nisl. Donec quis congue nulla, a volutpat nibh. Aenean varius rhoncus ex, eget luctus ex mollis et. Vivamus in finibus lectus. Proin scelerisque varius ornare. Nunc dapibus mauris sed est vestibulum, in ullamcorper lorem eleifend. Suspendisse luctus pulvinar sapien non tincidunt. Proin hendrerit at ipsum non fringilla.");
        $blog->setSummary("Quisque mattis pretium neque lacinia facilisis.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 5");
        $blog->setBody("Duis erat augue, laoreet vel blandit in, bibendum in nulla. Nam egestas, dolor eu iaculis eleifend, tellus diam viverra quam, eget venenatis nunc mi non sapien. Integer elit quam, efficitur quis sagittis eu, venenatis vitae justo. Pellentesque quis posuere risus, a interdum nisi. Duis at neque et massa porttitor efficitur ut at tortor. Vivamus commodo hendrerit mauris eget hendrerit. Sed eget commodo sapien. Nulla rhoncus justo nec dictum luctus. Nam non lacinia dolor. Nam cursus hendrerit vestibulum. Donec mattis sapien tortor, ac tempus mauris fringilla vel. Mauris et suscipit lorem, nec imperdiet enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna velit, et rhoncus lectus consectetur in. Donec vitae dictum nunc.");
        $blog->setSummary("Duis erat augue, laoreet vel blandit in, bibendum in nulla.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 6");
        $blog->setBody("Pellentesque tempus imperdiet eleifend. Morbi quis metus eu erat elementum consectetur. Curabitur quis placerat massa. Suspendisse lobortis tortor urna, nec rhoncus libero pharetra ac. Etiam placerat congue pulvinar. Nam eu pretium purus. Aliquam hendrerit lorem turpis. Nunc in pulvinar nisi. Pellentesque luctus porttitor erat ac vulputate. Sed tristique a ante et mattis. Nulla facilisi. Praesent vitae ornare metus, ac semper elit.");
        $blog->setSummary("Pellentesque tempus imperdiet eleifend. Morbi quis metus eu erat elementum consectetur.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 7");
        $blog->setBody("Praesent justo magna, congue in odio quis, pulvinar malesuada nisl. Aliquam sit amet lacus interdum, vulputate ex dapibus, commodo augue. Suspendisse mattis lectus diam, eget tincidunt eros luctus interdum. Praesent ac libero vitae nunc aliquam tempus ut non urna. Etiam tincidunt justo sapien, sed eleifend neque cursus in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum interdum consequat facilisis. Pellentesque lobortis, est volutpat pretium sagittis, mauris risus tempus ante, varius vehicula nisl nunc id ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quam nisi, fringilla id porta et, porta ac justo.");
        $blog->setSummary("Praesent justo magna, congue in odio quis, pulvinar malesuada nisl.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 8");
        $blog->setBody("Cras semper dui et nisi volutpat mollis sit amet sit amet felis. Proin viverra nec massa id aliquam. Donec urna nibh, iaculis at leo in, commodo maximus erat. Suspendisse dapibus at mauris id malesuada. In eget urna at ex ultrices suscipit nec vel ipsum. Cras nec vestibulum orci. Praesent leo diam, suscipit eu lacinia convallis, vestibulum vel massa. In hac habitasse platea dictumst. Sed blandit elit ut mollis eleifend. Nunc luctus, leo eu iaculis maximus, lectus odio viverra eros, vitae condimentum magna libero eu massa. Morbi fringilla velit eu erat gravida, id accumsan velit aliquam. Nam massa urna, aliquam non lacinia sed, rutrum posuere sapien. Nunc est urna, ornare at tortor id, ultrices dignissim mauris. Praesent accumsan fermentum dolor nec consequat.");
        $blog->setSummary("Cras semper dui et nisi volutpat mollis sit amet sit amet felis.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 9");
        $blog->setBody("Pellentesque ultricies blandit lorem, nec molestie enim cursus non. In lacinia et sem ac pulvinar. Ut tempor urna tellus, vitae vulputate dolor lacinia ac. Proin ac auctor orci. Sed congue porta quam id posuere. Vivamus dapibus, nulla id semper congue, metus metus molestie justo, ut malesuada magna eros a metus. Sed at erat ut est iaculis venenatis. Proin posuere ante ut nulla congue dictum. Quisque egestas, nibh id semper auctor, felis mi euismod libero, blandit egestas lectus orci sit amet tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum augue tortor, aliquet eu velit mattis, vehicula finibus magna. Donec id arcu placerat, pharetra lacus nec, luctus sapien. Aenean nec sagittis erat. Mauris sed finibus ante, quis sagittis dui. Nam ac varius lectus. Quisque a diam sem.");
        $blog->setSummary("Pellentesque ultricies blandit lorem, nec molestie enim cursus non. In lacinia et sem ac pulvinar.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 10");
        $blog->setBody("Nunc non augue venenatis, ultrices nulla quis, mattis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus a elementum diam. In pretium nisi ac mauris vehicula, et blandit lectus dictum. Fusce nec eros ultricies, vestibulum ex et, tincidunt eros. Donec quis congue purus, id bibendum dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin tempus, nisl ut efficitur molestie, neque urna tristique ligula, sed laoreet nisl magna sed metus. Suspendisse sed rutrum neque. Maecenas sagittis quam est, nec elementum est mollis id.");
        $blog->setSummary("Nunc non augue venenatis, ultrices nulla quis, mattis purus.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 11");
        $blog->setBody("Praesent ac sem sodales, pulvinar ipsum sed, lacinia ante. Sed sit amet nunc vehicula, consectetur metus ac, posuere purus. Quisque non sapien velit. Integer dapibus lectus vitae gravida convallis. Vivamus nisi libero, ornare sit amet faucibus ut, congue non leo. Cras nibh nisl, consequat vel molestie varius, pharetra sed nulla. Curabitur id diam mollis est pellentesque rhoncus. Cras consectetur lobortis turpis ut egestas. Phasellus mattis eleifend tortor, vel ultricies nibh fringilla vitae. Integer ut magna nec dolor lacinia faucibus. Aenean eu facilisis tellus, a tincidunt ex. Aliquam pretium tortor non velit fermentum posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis augue enim, suscipit eu orci vitae, venenatis faucibus nibh.");
        $blog->setSummary("Praesent ac sem sodales, pulvinar ipsum sed, lacinia ante.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 12");
        $blog->setBody("Nam interdum hendrerit turpis, in consectetur tortor rutrum non. Morbi fermentum tempus quam quis convallis. Quisque cursus efficitur vestibulum. Nullam mattis nisi libero, in pulvinar ex consectetur at. In sit amet lorem sit amet nibh rhoncus porttitor ac iaculis lacus. Integer mattis sem enim, maximus ultricies erat ultrices eu. Curabitur finibus nunc est, a mollis erat dignissim non. Morbi viverra diam erat. Ut tincidunt libero et neque laoreet interdum.");
        $blog->setSummary("Nam interdum hendrerit turpis, in consectetur tortor rutrum non.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 13");
        $blog->setBody("Proin ut consequat eros. Curabitur suscipit porttitor nisl nec viverra. Fusce lacus tellus, ultrices ut quam ut, feugiat tempus ligula. Fusce justo ante, tincidunt ut eros vitae, consectetur hendrerit elit. Vestibulum volutpat vitae nulla non maximus. Nam imperdiet, augue at dapibus tempor, enim metus congue sapien, sit amet sollicitudin ipsum lorem ut eros. Mauris ornare placerat tincidunt. Integer sed ante vestibulum eros porttitor porttitor. Nullam in cursus arcu. Integer eu ante in quam consectetur vestibulum eu luctus nunc. Nam non mauris magna. Pellentesque diam est, commodo nec risus vitae, egestas bibendum magna. Mauris tellus orci, molestie sed nisl quis, molestie ultrices metus. Curabitur mollis sed tortor eu rutrum.");
        $blog->setSummary("Proin ut consequat eros.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 14");
        $blog->setBody("In hac habitasse platea dictumst. Nulla nulla diam, vestibulum eu nibh non, imperdiet sollicitudin nisi. Quisque non erat tristique, volutpat sem id, aliquet ligula. Nunc cursus lorem eget metus rutrum, sit amet maximus sem scelerisque. Suspendisse potenti. Vestibulum sollicitudin at velit sit amet accumsan. Ut ac elementum leo. Nam sit amet suscipit quam. Fusce non varius ante, vitae venenatis augue.");
        $blog->setSummary("In hac habitasse platea dictumst.");

        $manager->persist($blog);
        $manager->flush();

        $blog = new Blog();

        $blog->setTitle("Lorem Ipsum 15");
        $blog->setBody("Nam in est a urna lacinia ullamcorper. Ut vehicula nunc vel tincidunt imperdiet. Ut pellentesque justo id ante sodales, sit amet porttitor tortor elementum. Donec mollis auctor vulputate. Quisque metus nulla, vulputate quis massa sed, tempor aliquam augue. Aenean maximus metus id nulla ultrices pulvinar. Praesent dolor urna, hendrerit a urna at, blandit venenatis felis. Quisque magna felis, tincidunt quis felis id, porttitor mollis lorem. Fusce cursus urna at mollis ornare. Aliquam ullamcorper justo ut dolor egestas, at facilisis eros fringilla. Fusce eu urna vitae massa scelerisque feugiat. Vestibulum semper, lorem id rutrum venenatis, urna ligula egestas odio, sit amet aliquam nulla velit sed libero. Sed eget malesuada mi. Praesent sit amet ligula ut lectus egestas bibendum sed sit amet justo. Praesent sed condimentum enim. Etiam at posuere lorem, non accumsan mi.");
        $blog->setSummary("Nam in est a urna lacinia ullamcorper.");

        $manager->persist($blog);
        $manager->flush();

    }



}